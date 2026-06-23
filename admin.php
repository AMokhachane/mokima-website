<?php
session_start();
include "db.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

/* ==========================================
   SECURE ADD NEWS (Prepared Statements)
========================================== */
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];

    $folder = "assets/" . $imageName;
    move_uploaded_file($imageTmp, $folder);

    $stmt = $conn->prepare("INSERT INTO news (title, image, content) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $imageName, $content);
    $stmt->execute();
    $stmt->close();
    
    header("Location: admin.php");
    exit();
}

/* ==========================================
   SECURE DELETE NEWS (Prepared Statements)
========================================== */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    
    $stmt = $conn->prepare("DELETE FROM news WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard | Mokima Publishing</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    body {
      background: #e6e6e6; /* Matches main site canvas */
      color: #111111;
      padding: 40px 20px;
      min-height: 100vh;
    }

    .admin-container {
      max-width: 1000px;
      margin: 0 auto;
    }

    /* PREMIUM APP BAR HEADER */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      border-bottom: 2px solid rgba(0, 0, 0, 0.05);
      padding-bottom: 20px;
      margin-bottom: 35px;
    }

    .title-group h2 {
      font-size: 1.8rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: -0.5px;
      color: #111111;
    }

    .title-group p {
      font-size: 0.82rem;
      color: #666666;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-top: 2px;
    }

    .logout {
      text-decoration: none;
      color: #ffffff;
      background: #111111;
      padding: 10px 22px;
      border-radius: 8px;
      font-size: 0.8rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .logout:hover {
      background: #b88a1c;
      transform: translateY(-2px);
    }

    /* SYSTEM MODULE CARDS */
    .card {
      background: #ffffff;
      padding: 35px;
      border-radius: 14px;
      margin-bottom: 30px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
      border: 1px solid rgba(0, 0, 0, 0.02);
    }

    .card h3 {
      font-size: 1.15rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: #b88a1c; /* Structural Header Gold */
      margin-bottom: 25px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* MODERNIZED CONTROLS */
    label {
      font-size: 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: #444444;
      display: block;
      margin-bottom: 6px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    input[type="text"], textarea {
      width: 100%;
      padding: 14px;
      border-radius: 8px;
      border: 1px solid rgba(0, 0, 0, 0.12);
      background: #fafafa;
      color: #111111;
      font-size: 0.95rem;
      font-weight: 500;
      outline: none;
      transition: border-color 0.2s ease, background-color 0.2s ease;
    }

    input[type="text"]:focus, textarea:focus {
      border-color: #b88a1c;
      background: #ffffff;
    }

    /* CUSTOM premium upload field aesthetics */
    input[type="file"] {
      width: 100%;
      padding: 10px;
      background: #fafafa;
      border: 1px dashed rgba(0, 0, 0, 0.15);
      border-radius: 8px;
      font-size: 0.88rem;
      color: #555555;
    }

    button {
      background: #111111;
      color: #ffffff;
      border: none;
      padding: 14px 28px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 0.85rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: background-color 0.2s ease, box-shadow 0.2s ease;
    }

    button:hover {
      background: #b88a1c;
      box-shadow: 0 5px 15px rgba(184, 138, 28, 0.2);
    }

    /* NEWS FEED ARCHITECTURE */
    .news-item {
      display: flex;
      gap: 25px;
      align-items: center;
      background: #ffffff;
      padding: 20px;
      border-radius: 10px;
      border: 1px solid rgba(0, 0, 0, 0.05);
      margin-bottom: 15px;
      transition: box-shadow 0.2s ease;
    }

    .news-item:hover {
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    }

    .news-item:last-child {
      margin-bottom: 0;
    }

    .news-item img {
      width: 110px;
      height: 75px;
      object-fit: cover;
      border-radius: 6px;
      background-color: #111111;
    }

    .news-content {
      flex: 1;
    }

    .news-content h4 {
      font-size: 1rem;
      font-weight: 800;
      color: #111111;
      margin-bottom: 4px;
      line-height: 1.3;
    }

    .news-content p {
      font-size: 0.88rem;
      color: #666666;
      line-height: 1.4;
    }

    .delete-btn {
      text-decoration: none;
      color: #d63031;
      font-size: 0.8rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      border: 1px solid rgba(214, 48, 49, 0.2);
      padding: 8px 16px;
      border-radius: 6px;
      transition: background-color 0.2s ease, color 0.2s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .delete-btn:hover {
      background: #d63031;
      color: #ffffff;
      border-color: #d63031;
    }

    @media (max-width: 650px) {
      .news-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
      }
      .news-item img {
        width: 100%;
        height: 150px;
      }
      .delete-btn {
        width: 100%;
        justify-content: center;
      }
    }
  </style>
</head>

<body>

<div class="admin-container">

  <div class="header">
    <div class="title-group">
      <h2>Admin Panel</h2>
      <p>Mokima Publishing Engine</p>
    </div>
    <a href="logout.php" class="logout">
      Logout <i class="fa-solid fa-arrow-right-from-bracket"></i>
    </a>
  </div>

  <div class="card">
    <h3><i class="fa-solid fa-pen-to-square"></i> Create News Post</h3>

    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Article Title</label>
        <input type="text" name="title" placeholder="e.g., Mokima Artists Nominated for 2026 Awards" required>
      </div>

      <div class="form-group">
        <label>Cover Media</label>
        <input type="file" name="image" accept="image/*" required>
      </div>

      <div class="form-group">
        <label>Body Content</label>
        <textarea name="content" rows="6" placeholder="Write full press release or story details..." required></textarea>
      </div>

      <button type="submit" name="add">
        Publish Story <i class="fa-solid fa-paper-plane"></i>
      </button>
    </form>
  </div>
    
  <div class="card">
    <h3><i class="fa-solid fa-list-check"></i> Existing Publications</h3>

    <?php
    $result = $conn->query("SELECT * FROM news ORDER BY id DESC");

    if ($result->num_rows === 0) {
        echo '<p style="color: #666; font-size: 0.9rem; font-style: italic;">No articles found in the database.</p>';
    }

    while ($row = $result->fetch_assoc()) {
    ?>
      <div class="news-item">
        <img src="assets/<?php echo htmlspecialchars($row['image']); ?>" alt="Cover">

        <div class="news-content">
          <h4><?php echo htmlspecialchars($row['title']); ?></h4>
          <p><?php echo htmlspecialchars(substr($row['content'], 0, 110)); ?>...</p>
        </div>

        <a class="delete-btn" href="admin.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to permanently remove this post?');">
          <i class="fa-solid fa-trash-can"></i> Delete
        </a>
      </div>
    <?php } ?>

  </div>

</div>

</body>
</html>