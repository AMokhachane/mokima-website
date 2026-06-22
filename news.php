<?php
include "db.php";

$result = $conn->query("SELECT * FROM news ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News | Mokima Publishing</title>

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
      height: 100vh;
      background: #e6e6e6;
      font-family: 'Plus Jakarta Sans', sans-serif;
      overflow: hidden; /* Prevents body scroll entirely */
    }

    /* FIXED SCREEN CONTAINER */
    .news-page {
      height: 100vh;
      padding: 100px 20px 20px; /* Snugger padding to respect header space */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }

    .header-container {
      text-align: center;
      margin-bottom: 25px;
      flex-shrink: 0; /* Keeps header sharp and non-compressed */
    }

    h1 {
      font-size: 2rem;
      font-weight: 800;
      color: #111;
      margin-bottom: 4px;
      letter-spacing: -0.5px;
      text-transform: uppercase;
    }

    .subheading {
      font-size: 0.85rem;
      color: #666;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      font-weight: 700;
    }

    /* MAIN TRACK MODULE */
    .container-track {
      width: 100%;
      max-width: 1200px;
      flex: 1; 
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 0; /* Crucial fix for inner flex child calculation */
    }

    /* COMPACT DYNAMIC GRID */
    .news-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 25px;
      width: 100%;
      flex: 1;
      min-height: 0; /* Forces grid to stay contained within viewport height limits */
    }

    .news-card {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.06);
      display: flex;
      flex-direction: column;
      transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.4s cubic-bezier(0.25, 1, 0.5, 1);
      border: 1px solid rgba(0, 0, 0, 0.03);
      height: 100%; /* Spans exactly to fit the layout block */
    }

    .news-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }

    /* Image scales contextually without bursting the container */
    .news-card img {
      width: 100%;
      flex: 1.1; 
      min-height: 0;
      object-fit: cover;
      background-color: #111;
    }

    .news-content {
      padding: 20px;
      display: flex;
      flex-direction: column;
      flex: 1;
      min-height: 0;
    }

    .news-meta {
      font-size: 0.68rem;
      letter-spacing: 1.2px;
      text-transform: uppercase;
      font-weight: 700;
      color: #b88a1c;
      margin-bottom: 8px;
      flex-shrink: 0;
    }

    .news-title {
      font-size: 1.05rem;
      font-weight: 800;
      margin-bottom: 10px;
      color: #111;
      line-height: 1.3;
      flex-shrink: 0;
      display: -webkit-box;
      -webkit-line-clamp: 2; /* Safety clamp for titles */
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .news-excerpt {
      font-size: 0.85rem;
      color: #444;
      line-height: 1.5;
      margin-bottom: 15px;
      flex: 1;
      
      /* Pure CSS truncation: dynamically cuts text to fit the viewport space */
      display: -webkit-box;
      -webkit-line-clamp: 3; 
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .read-more {
      text-decoration: none;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: #111;
      align-self: flex-start;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: color 0.2s ease, transform 0.2s ease;
      flex-shrink: 0;
      margin-top: auto; /* Locks read-more link precisely to the card base */
    }

    .read-more:hover {
      color: #b88a1c;
      transform: translateX(4px);
    }

    /* SYSTEM FOOTER */
    .divider {
      width: 100%;
      height: 1px;
      background: rgba(0, 0, 0, 0.08);
      margin: 20px 0 15px;
      flex-shrink: 0;
    }

    .contact-footer {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #666;
      font-size: 12px;
      font-weight: 500;
      padding-bottom: 5px;
      flex-shrink: 0;
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

    /* MOBILE STANDARDS (reverts to natural scrolling so cards don't crush) */
    @media (max-width: 1024px) {
      body {
        overflow: auto;
        height: auto;
      }
      .news-page {
        height: auto;
        padding-top: 110px;
      }
      .container-track {
        height: auto;
      }
      .news-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
      }
      .news-card img {
        height: 200px;
      }
    }

    @media (max-width: 680px) {
      .news-grid {
        grid-template-columns: 1fr;
      }
      .contact-footer {
        flex-direction: column;
        gap: 12px;
        text-align: center;
      }
    }
  </style>
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="news-page">

  <div class="header-container">
    <h1>NEWS</h1>
    <div class="subheading">Latest updates from Mokima Publishing</div>
  </div>

  <div class="container-track">
    <div class="news-grid">

      <?php while ($row = $result->fetch_assoc()) { ?>

        <div class="news-card">

          <img src="assets/<?php echo $row['image']; ?>" alt="News Image">

          <div class="news-content">

            <div class="news-meta">
              Press Release · <?php echo date("d M Y", strtotime($row['created_at'])); ?>
            </div>

            <div class="news-title">
              <?php echo $row['title']; ?>
            </div>

            <div class="news-excerpt">
              <?php echo substr($row['content'], 0, 150); ?>...
            </div>

            <a href="view.php?id=<?php echo $row['id']; ?>" class="read-more">
              Read More <i class="fa-solid fa-arrow-right-long"></i>
            </a>

          </div>

        </div>

      <?php } ?>

    </div>
    <div class="divider"></div>

    <footer class="contact-footer">
      <p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>

      <div class="socials">
        <a href="https://www.facebook.com/MokimaPublishing" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.tiktok.com/@mokima_publishing" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.instagram.com/mokimapublishing" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
    </footer>
  </div>

</div>

</body>
</html>