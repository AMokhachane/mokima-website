<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>News | Mokima Publishing</title>

  <style>
    * {
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      background: #e6e6e6;
    }

    .news-page {
      min-height: 100vh;
  padding: 90px 20px 40px; /* space for navbar */
  display: flex;
  flex-direction: column;
  justify-content: space-between; /* carousel center, footer bottom */
  align-items: center;
    }
h1 {
  font-size: 1.8rem;
  color: #111;
  margin-bottom: 5px;
  text-align: center;
}

.subheading {
  font-size: 0.95rem;
  color: #666;
  letter-spacing: 1.5px;
  margin-bottom: 20px;
  text-transform: uppercase;
  text-align: center;
}

    /* NEWS GRID */
    .news-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }

    .news-card {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      display: flex;
      flex-direction: column;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .news-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    }

    .news-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .news-content {
      padding: 20px;
      display: flex;
      flex-direction: column;
      flex: 1;
    }

    .news-meta {
      font-size: 0.75rem;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: #888;
      margin-bottom: 6px;
    }

    .news-title {
      font-size: 1.05rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: #111;
      line-height: 1.3;
    }

    .news-excerpt {
      font-size: 0.9rem;
      color: #444;
      line-height: 1.5;
      margin-bottom: 20px;
      flex: 1;
    }

    .read-more {
      text-decoration: none;
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: #405af0; /* Mokima accent */
      align-self: flex-start;
      transition: color 0.15s ease;
    }

    .read-more:hover {
      color: #2c3fbf;
    }

    /* FOOTER (same as contact page) */
    .divider {
      width: 100%;
      max-width: 1200px;
      height: 1px;
      background: rgba(0, 0, 0, 0.2);
      margin: 40px auto 0;
    }

    .contact-footer {
      max-width: 1200px;
      
      
      padding-top: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #555;
      font-size: 13px;
      gap: 40px;
      flex-wrap: wrap;
    }

    .socials {
      display: flex;
      gap: 16px;
    }

    .socials a {
      color: #444;
      font-size: 16px;
      transition: transform 0.15s ease, color 0.15s ease;
    }

    .socials a:hover {
      color: #000;
      transform: translateY(-2px);
    }

    /* RESPONSIVE */
    @media (max-width: 1000px) {
      .news-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 600px) {
      .news-grid {
        grid-template-columns: 1fr;
      }

      .news-card img {
        height: 180px;
      }
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="news-page">
  <div>
    <h1>NEWS</h1>
    <div class="subheading">Latest updates from Mokima Publishing</div>
  </div>

  <div class="news-grid">

    <div class="news-card">
      <img src="assets/shake.jpg" alt="News 1">
      <div class="news-content">
        <div class="news-meta">Press Release · 20 Feb 2026</div>
        <div class="news-title">Mokima Publishing Signs New Songwriters</div>
        <div class="news-excerpt">
          We are proud to welcome new talent to the Mokima Publishing family, expanding our growing catalogue of exceptional writers and producers.
        </div>
        <a href="#" class="read-more">Read More →</a>
      </div>
    </div>

    <div class="news-card">
      <img src="assets/boy.jpg" alt="News 2">
      <div class="news-content">
        <div class="news-meta">Sync · 05 Feb 2026</div>
        <div class="news-title">Mokima Music Featured in National Campaign</div>
        <div class="news-excerpt">
          Our catalogue was selected for a major advertising campaign, bringing local music to a nationwide audience.
        </div>
        <a href="#" class="read-more">Read More →</a>
      </div>
    </div>

    <div class="news-card">
      <img src="assets/download.jpg" alt="News 3">
      <div class="news-content">
        <div class="news-meta">Industry · 18 Jan 2026</div>
        <div class="news-title">Songwriting Camp Sparks New Collaborations</div>
        <div class="news-excerpt">
          Our latest songwriting camp brought together artists, producers and composers to create exciting new material.
        </div>
        <a href="#" class="read-more">Read More →</a>
      </div>
    </div>

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

</body>
</html>