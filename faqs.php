<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ | Mokima Publishing</title>

  <!-- Google Fonts & FontAwesome Icons -->
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
      min-height: 100vh;
      background: #e6e6e6;
      font-family: 'Plus Jakarta Sans', sans-serif;
      display: flex;
      flex-direction: column;
    }

    /* CONTAINER ARCHITECTURE */
    .faq-page {
      flex: 1;
      padding: 120px 20px 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }

    .faq-content {
      width: 100%;
      max-width: 850px; /* Snug professional container width */
      flex: 1;
    }

    /* TITLE DECK */
    .faq-title {
      font-size: 2rem;
      font-weight: 800;
      color: #111;
      text-align: center;
      margin-bottom: 40px;
      letter-spacing: -0.5px;
      text-transform: uppercase;
    }

    /* INTERACTIVE ACCORDION DECK */
    .faq-item {
      background: #fff;
      border-radius: 12px;
      margin-bottom: 16px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
      border: 1px solid rgba(0, 0, 0, 0.02);
      overflow: hidden;
      transition: box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .faq-item:hover {
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .faq-item.active {
      border-color: rgba(184, 138, 28, 0.3);
      box-shadow: 0 10px 30px rgba(184, 138, 28, 0.06);
    }

    /* ACCORDION HEADER TRIGGER */
    .faq-header {
      padding: 22px 28px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      user-select: none;
      transition: background-color 0.2s ease;
    }

    .faq-header h3 {
      font-size: 1.05rem;
      font-weight: 700;
      color: #111;
      line-height: 1.4;
      transition: color 0.2s ease;
    }

    .faq-item.active .faq-header h3 {
      color: #b88a1c; /* Brand Gold highlight when active */
    }

    .faq-icon {
      font-size: 0.9rem;
      color: #888;
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s ease;
    }

    .faq-item.active .faq-icon {
      transform: rotate(180deg);
      color: #b88a1c;
    }

    /* SMOOTH PANELS */
    .faq-panel {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1);
      background-color: #fafafa;
    }

    .faq-panel-inside {
      padding: 0 28px 24px;
    }

    .faq-panel p {
      font-size: 0.92rem;
      color: #444;
      line-height: 1.6;
      margin-bottom: 12px;
    }

    .faq-panel p:last-child {
      margin-bottom: 0;
    }

    /* BULLET REGISTRATION */
    .faq-bullet-list {
      margin-top: 10px;
      list-style: none;
    }

    .faq-bullet-list li {
      font-size: 0.92rem;
      color: #444;
      line-height: 1.6;
      margin-bottom: 8px;
      padding-left: 20px;
      position: relative;
    }

    .faq-bullet-list li::before {
      content: "✦";
      position: absolute;
      left: 0;
      color: #b88a1c;
      font-size: 0.75rem;
      top: 1px;
    }

    /* FOOTER STRIP */
    .divider {
      width: 100%;
      max-width: 1200px;
      height: 1px;
      background: rgba(0, 0, 0, 0.08);
      margin: 50px 0 20px;
    }

    .faq-footer {
      width: 100%;
      max-width: 1200px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #666;
      font-size: 13px;
      font-weight: 500;
      padding-bottom: 10px;
    }

    .socials {
      display: flex;
      gap: 20px;
    }

    .socials a {
      color: #444;
      font-size: 16px;
      transition: transform 0.2s ease, color 0.2s ease;
    }

    .socials a:hover {
      color: #b88a1c;
      transform: translateY(-2px);
    }

    /* RESPONSIVE LAYOUT */
    @media (max-width: 680px) {
      .faq-page {
        padding-top: 100px;
      }
      .faq-header {
        padding: 18px 20px;
      }
      .faq-panel-inside {
        padding: 0 20px 20px;
      }
      .faq-footer {
        flex-direction: column;
        gap: 16px;
        text-align: center;
      }
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="faq-page">
  <div class="faq-content">

    <h1 class="faq-title">FAQ</h1>

    <!-- ITEM 1 -->
    <div class="faq-item">
      <div class="faq-header">
        <h3>1. What is Music Publishing?</h3>
        <i class="fa-solid fa-chevron-down faq-icon"></i>
      </div>
      <div class="faq-panel">
        <div class="faq-panel-inside">
          <p>Music publishing is the management, licensing, and monetization of musical compositions (lyrics and melodies), ensuring composers and songwriters get paid for their work.</p>
        </div>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="faq-item">
      <div class="faq-header">
        <h3>2. What is the difference between Masters and Publishing?</h3>
        <i class="fa-solid fa-chevron-down faq-icon"></i>
      </div>
      <div class="faq-panel">
        <div class="faq-panel-inside">
          <p>Every song has two distinct copyrights:</p>
          <p><strong>Publishing</strong> covers the "song" itself: the lyrics, melody, and composition. This is typically owned by the songwriters, composers or publishers.</p>
          <p><strong>Masters</strong> cover the specific "sound recording" of that song: the actual audio file you hear. This is typically owned by the performing artist or record label.</p>
        </div>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="faq-item">
      <div class="faq-header">
        <h3>3. What are Collective Management Organisations (CMOs)?</h3>
        <i class="fa-solid fa-chevron-down faq-icon"></i>
      </div>
      <div class="faq-panel">
        <div class="faq-panel-inside">
          <p>Collective Management Organisations (CMOs) are private, often non-profit organizations that manage copyright and related rights on behalf of creators (authors, performers, publishers):</p>
          <ul class="faq-bullet-list">
            <li><strong>SAMPRA</strong> administers Needletime/Neighbouring Rights on behalf of recording artists and recording companies for sound recordings.</li>
            <li><strong>SAMRO</strong> administers Performing Rights on behalf of authors, composers, and publishers of musical works.</li>
            <li><strong>CAPASSO</strong> administers Mechanical Rights on behalf of authors, composers, and publishers of musical works.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- ITEM 4 -->
    <div class="faq-item">
      <div class="faq-header">
        <h3>4. Who needs a publisher?</h3>
        <i class="fa-solid fa-chevron-down faq-icon"></i>
      </div>
      <div class="faq-panel">
        <div class="faq-panel-inside">
          <p>Established composers and songwriters with an active catalogue who want to optimize international royalty collection, mechanical auditing, and sync licensing placement opportunities.</p>
        </div>
      </div>
    </div>

    <!-- ITEM 5 -->
    <div class="faq-item">
      <div class="faq-header">
        <h3>5. What is the difference between distribution and publishing?</h3>
        <i class="fa-solid fa-chevron-down faq-icon"></i>
      </div>
      <div class="faq-panel">
        <div class="faq-panel-inside">
          <p>Publishing manages the underlying rights, registration, and royalties of the songwriting composition (lyrics and melody), while distribution focuses on delivering the final master recording to digital streaming platforms (Spotify, Apple Music) and collecting sales/streaming revenue.</p>
        </div>
      </div>
    </div>

  </div>

  <div class="divider"></div>

  <footer class="faq-footer">
    <p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>

    <div class="socials">
      <a href="https://www.facebook.com/MokimaPublishing" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.tiktok.com/@mokima_publishing" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
      <a href="https://www.instagram.com/mokimapublishing" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>
</div>

<script>
  // Accordion Logic Engine
  document.querySelectorAll('.faq-header').forEach(header => {
    header.addEventListener('click', () => {
      const item = header.parentElement;
      const panel = header.nextElementSibling;
      const isActive = item.classList.contains('active');
      
      // Collapse any currently open item for a clean presentation
      document.querySelectorAll('.faq-item').forEach(el => {
        el.classList.remove('active');
        el.querySelector('.faq-panel').style.maxHeight = null;
      });

      // Toggle current item
      if (!isActive) {
        item.classList.add('active');
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  });
</script>

</body>
</html>