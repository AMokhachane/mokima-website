<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Mokima Publishing</title>

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
      background: #e6e6e6; /* Restores the signature light gray canvas background */
      font-family: 'Plus Jakarta Sans', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* CONTAINER TRACK SYSTEM */
    .contact-page {
      max-width: 1200px;
      width: 100%;
      margin: 0 auto;
      padding: 130px 20px 30px; /* Snug top margin spacing below navigation bars */
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    /* VIEW OVERVIEW TITLES */
    .page-header {
      text-align: center;
      margin-bottom: 45px;
    }

    .page-header h1 {
      font-size: 2rem;
      font-weight: 800;
      color: #111111;
      letter-spacing: -0.5px;
      text-transform: uppercase;
      margin-bottom: 4px;
    }

    .page-header .subheading {
      font-size: 0.85rem;
      color: #666666;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      font-weight: 700;
    }

    /* CARD STRUCTURE ARTIFACTS */
    .contact-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr); /* Sleek 3-column system */
      gap: 30px;
      margin-bottom: 40px;
    }

    .contact-block {
      background: #ffffff;
      padding: 40px 35px;
      border-radius: 14px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
      border: 1px solid rgba(0, 0, 0, 0.02);
      transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.3s cubic-bezier(0.25, 1, 0.5, 1);
      display: flex;
      flex-direction: column;
      align-items: center; /* Centers items horizontally */
      justify-content: center; /* Centers items vertically to eliminate white space */
      text-align: center; /* Centers typography lines */
    }

    .contact-block:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.07);
    }

    /* Full span grid assignment for base office locations */
    .address-block {
      grid-column: span 3; /* Spans all 3 columns gracefully at the base */
      padding: 35px 20px;
    }

    /* TYPOGRAPHY ELEMENTS INSIDE MODULES */
    .contact-block h2 {
      font-size: 1.1rem;
      font-weight: 800;
      color: #b88a1c; /* Signature Brand Gold Accent */
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    /* CONTACT INTERACTIVE LINK SYSTEM */
    .info-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 12px;
      width: 100%;
    }

    .info-row {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 0.92rem;
      color: #444444;
    }

    .info-row i {
      color: #111111;
      font-size: 1rem;
      width: 20px;
      text-align: center;
    }

    .info-link {
      color: #444444;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .info-link:hover {
      color: #b88a1c;
    }

    .address-text {
      font-size: 1rem;
      color: #111111;
      font-weight: 500;
      margin-top: 5px;
    }

    /* VIBRANT SOCIAL BUTTON ARCHITECTURE */
    .social-container {
      display: flex;
      flex-direction: column;
      gap: 12px;
      width: 100%;
      max-width: 220px; /* Constraints social block alignment width */
    }

    .social-row {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      text-decoration: none;
      color: #444444;
      font-weight: 700;
      font-size: 0.9rem;
      padding: 10px 14px;
      border-radius: 8px;
      background: #fafafa;
      border: 1px solid rgba(0, 0, 0, 0.03);
      transition: all 0.2s ease;
    }

    .social-row i {
      font-size: 1.1rem;
      width: 20px;
      text-align: center;
      transition: transform 0.2s ease;
    }

    /* Custom hover styling for native brand presentation */
    .social-row.fb:hover {
      background: #edf2fa;
      color: #1877f2;
      border-color: rgba(24, 119, 242, 0.15);
    }
    .social-row.tt:hover {
      background: #f0f0f0;
      color: #000000;
      border-color: rgba(0, 0, 0, 0.15);
    }
    .social-row.ig:hover {
      background: #fff0f5;
      color: #e1306c;
      border-color: rgba(225, 48, 108, 0.15);
    }

    .social-row:hover i {
      transform: scale(1.15);
    }

    /* DECORATIVE BOUNDARY LINES */
    .divider {
      width: 100%;
      height: 1px;
      background: rgba(0, 0, 0, 0.08);
      margin-bottom: 20px;
      margin-top: auto;
    }

    /* BRAND FOOTER UTILITIES */
    .contact-footer {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #666666;
      font-size: 12px;
      font-weight: 500;
      padding-bottom: 5px;
    }

    /* MEDIA QUERY RESPONSIVENESS BREAKPOINTS */
    @media (max-width: 968px) {
      .contact-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .address-block {
        grid-column: span 2;
      }
    }

    @media (max-width: 700px) {
      .contact-grid {
        grid-template-columns: 1fr;
      }
      .address-block {
        grid-column: span 1;
      }
    }

    @media (max-width: 600px) {
      .contact-page {
        padding-top: 110px;
      }
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="contact-page">
  
  <div class="page-header">
    <h1>Connect With Us</h1>
    <div class="subheading">Get in touch with the Mokima team</div>
  </div>

  <div class="contact-grid">

    <div class="contact-block">
      <h2><i class="fa-solid fa-circle-info"></i> Enquiries</h2>
      <div class="info-container">
        <div class="info-row">
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:info@mokimapublishing.co.za" class="info-link">info@mokimapublishing.co.za</a>
        </div>
        <div class="info-row">
          <i class="fa-solid fa-phone"></i>
          <a href="tel:+27114630248" class="info-link">+27 11 463 0248</a>
        </div>
      </div>
    </div>

    <div class="contact-block">
      <h2><i class="fa-solid fa-sliders"></i> A&R and Marketing</h2>
      <div class="info-container">
        <div class="info-row">
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:marketing@mokimapublishing.co.za" class="info-link">marketing@mokimapublishing.co.za</a>
        </div>
        <div class="info-row">
          <i class="fa-solid fa-phone"></i>
          <a href="tel:+27114630248" class="info-link">+27 11 463 0248</a>
        </div>
      </div>
    </div>

    <div class="contact-block">
      <h2><i class="fa-solid fa-hashtag"></i> Social Media</h2>
      <div class="social-container">
        <a href="https://www.facebook.com/MokimaPublishing" target="_blank" class="social-row fb">
          <i class="fab fa-facebook-f"></i> Facebook
        </a>
        <a href="https://www.tiktok.com/@mokima_publishing" target="_blank" class="social-row tt">
          <i class="fab fa-tiktok"></i> TikTok
        </a>
        <a href="https://www.instagram.com/mokimapublishing" target="_blank" class="social-row ig">
          <i class="fab fa-instagram"></i> Instagram
        </a>
      </div>
    </div>

    <div class="contact-block address-block">
      <h2><i class="fa-solid fa-location-dot"></i> Head Office</h2>
      <p class="address-text">123 Sloane Street, Bryanston, Johannesburg</p>
    </div>

  </div>

  <div class="divider"></div>

  <footer class="contact-footer">
    <p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>
  </footer>

</div>

</body>
</html>