<?php
session_start();
include "db.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

/* =========================
   ADD NEWS
========================= */
if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];

    $folder = "assets/" . $imageName;
    move_uploaded_file($imageTmp, $folder);

    $conn->query("
        INSERT INTO news (title, image, content)
        VALUES ('$title', '$imageName', '$content')
    ");
}

/* =========================
   DELETE NEWS
========================= */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM news WHERE id=$id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", sans-serif;
}

body {
    background: #1c1c1c;
    color: white;
    padding: 30px;
}

/* HEADER */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.header h2 {
    color: #ffcc00;
}

.logout {
    text-decoration: none;
    color: black;
    background: #ffcc00;
    padding: 8px 15px;
    border-radius: 6px;
    font-weight: bold;
}

/* CARD */
.card {
    background: #2a2a2a;
    padding: 25px;
    border-radius: 12px;
    margin-bottom: 30px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.4);
}

/* FORM */
input, textarea {
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: none;
    background: #3a3a3a;
    color: white;
}

input:focus, textarea:focus {
    outline: none;
    border: 1px solid #ffcc00;
}

button {
    background: #ffcc00;
    color: black;
    border: none;
    padding: 12px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
}

button:hover {
    background: #e6b800;
}

/* NEWS LIST */
.news-item {
    display: flex;
    gap: 20px;
    align-items: center;
    background: #2a2a2a;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 15px;
}

.news-item img {
    width: 120px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
}

.news-content {
    flex: 1;
}

.news-content h4 {
    color: #ffcc00;
    margin-bottom: 5px;
}

.delete-btn {
    text-decoration: none;
    color: #ff4d4d;
    font-weight: bold;
}
</style>

</head>

<body>

<div class="header">
    <h2>Admin Panel</h2>
    <a href="logout.php" class="logout">Logout</a>
</div>

<!-- ADD NEWS -->
<div class="card">
    <h3 style="margin-bottom:15px;">Add News</h3>

    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="News Title" required>

        <input type="file" name="image" required>

        <textarea name="content" rows="5" placeholder="Write full content..." required></textarea>

        <button type="submit" name="add">Publish News</button>
    </form>
</div>

<!-- EXISTING NEWS -->
<div class="card">
    <h3 style="margin-bottom:15px;">Existing News</h3>

    <?php
    $result = $conn->query("SELECT * FROM news ORDER BY id DESC");

    while ($row = $result->fetch_assoc()) {
    ?>
        <div class="news-item">

            <img src="assets/<?php echo $row['image']; ?>">

            <div class="news-content">
                <h4><?php echo $row['title']; ?></h4>
                <p><?php echo substr($row['content'], 0, 100); ?>...</p>
            </div>

            <a class="delete-btn" href="admin.php?delete=<?php echo $row['id']; ?>">
                Delete
            </a>

        </div>
    <?php } ?>

</div>

</body>
</html>