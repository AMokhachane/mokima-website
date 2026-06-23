<?php
include "db.php";

// Fetch ALL news articles, from newest to oldest
$result = $conn->query("SELECT * FROM news ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Archive | Mokima Publishing</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background: #e6e6e6;
      font-family: 'Plus Jakarta Sans', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* SCROLLABLE MAIN CONTAINER */
    .archive-page {
      max-width: 1200px;
      width: 100%;
      margin: 0 auto;
      padding: 120px 20px 40px; /* Generous top padding for the navbar space */
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    /* HEADER SYSTEM WITH BACK LINK */
    .archive-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      border-bottom: 2px solid rgba(0, 0, 0, 0.05);
      padding-bottom: 20px;
      margin-bottom: 40px;
    }

    .title-area h1 {
      font-size: 2rem;
      font-weight: 800;
      color: #111;
      letter-spacing: -0.5px;
      text-transform: uppercase;
      margin-bottom: 4px;
    }

    .title-area .subheading {
      font-size: 0.85rem;
      color: #666;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      font-weight: 700;
    }

    .back-link {
      text-decoration: none;
      font-size: 0.8rem;
      font-weight: 800;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: #111;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: color 0.2s ease, transform 0.2s ease;
      padding-bottom: 4px;
    }

    .back-link:hover {
      color: #b88a1c;
      transform: translateX(-4px);
    }

    /* INFINITE ARCHIVE GRID (Auto-wrapping row architecture) */
    .archive-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      width: 100%;
      margin-bottom: 40px;
    }

    .archive-card {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.04);
      display: flex;
      flex-direction: column;
      border: 1px solid rgba(0, 0, 0, 0.02);
      transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.3s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .archive-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    }

    .archive-card img {
      width: 100%;
      height: 210px;
      object-fit: cover;
      background-color: #111;
    }

    .card-body {
      padding: 22px;
      display: flex;
      flex-direction: column;
      flex: 1;
    }

    .card-meta {
      font-size: 0.68rem;
      letter-spacing: 1.2px;
      text-transform: uppercase;
      font-weight: 700;
      color: #b88a1c;
      margin-bottom: 8px;
    }

    .card-title {
      font-size: 1.05rem;
      font-weight: 800;
      margin-bottom: 10px;
      color: #111;
      line-height: 1.3;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .card-excerpt {
      font-size: 0.85rem;
      color: #555;
      line-height: 1.5;
      margin-bottom: 20px;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .card-link {
      text-decoration: none;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: #111;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: color 0.2s ease, transform 0.2s ease;
      margin-top: auto; /* Push accurately to block footer */
    }

    .card-link:hover {
      color: #b88a1c;
      transform: translateX(4px);
    }

    /* STRUCTURAL ARCHIVE BASE */
    .divider {
      width: 100%;
      height: 1px;
      background: rgba(0, 0, 0, 0.08);
      margin-top: auto; /* Forces structural system components to anchor cleanly */
      margin-bottom: 20px;
    }

    .archive-footer {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #666;
      font-size: 12px;
      font-weight: 500;
      padding-bottom: 10px;
    }

    .socials {
      display: flex;
      gap: 20px;
    }

    .socials a {
      color: #444;
      font-size: 15px;
      transition: transform 0.2s ease, color 0.2s ease;
    }

    .socials a:hover {
      color: #b88a1c;
      transform: translateY(-2px);
    }

    /* RESPONSIVE LAYOUT CONSTRAINTS */
    @media (max-width: 1024px) {
      .archive-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
      }
    }

    @media (max-width: 768px) {
      .archive-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
      }
    }

    @media (max-width: 600px) {
      .archive-grid {
        grid-template-columns: 1fr;
      }
      .archive-footer {
        flex-direction: column;
        gap: 12px;
        text-align: center;
      }
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="archive-page">

  <!-- TOP CONTEXT AREA -->
  <div class="archive-header">
    <div class="title-area">
      <h1>News Archive</h1>
      <div class="subheading">Complete historical updates from Mokima</div>
    </div>
    <a href="news.php" class="back-link">
      <i class="fa-solid fa-arrow-left-long"></i> Back To Latest
    </a>
  </div>

  <!-- WRAPPING DYNAMIC GRID -->
  <div class="archive-grid">

    <?php while ($row = $result->fetch_assoc()) { ?>

      <div class="archive-card">
        <img src="assets/<?php echo $row['image']; ?>" alt="News Image">
        
        <div class="card-body">
          <div class="card-meta">
            Press Release · <?php echo date("d M Y", strtotime($row['created_at'])); ?>
          </div>
          
          <div class="card-title">
            <?php echo $row['title']; ?>
          </div>
          
          <div class="card-excerpt">
            <?php echo substr($row['content'], 0, 150); ?>...
          </div>
          
          <a href="view.php?id=<?php echo $row['id']; ?>" class="card-link">
            Read Story <i class="fa-solid fa-arrow-right-long"></i>
          </a>
        </div>
      </div>

    <?php } ?>

  </div>

  <div class="divider"></div>

  <!-- SYSTEM FOOTER -->
  <footer class="archive-footer">
    <p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>

    <div class="socials">
      <a href="https://www.facebook.com/MokimaPublishing" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.tiktok.com/@mokima_publishing" target="_blank"><i class="fab fa-tiktok"></i></a>
      <a href="https://www.instagram.com/mokimapublishing" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>

</div>

</body>
</html>