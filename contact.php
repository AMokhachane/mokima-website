<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Us</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      background: #f7f7f7;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .contact-wrapper {
      width: 900px;
      max-width: 95%;
      background: #fff;
      border-radius: 16px;
      display: flex;
      overflow: hidden;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    .contact-form {
      flex: 2;
      padding: 50px 40px;
    }

    .contact-form h2 {
      margin: 0 0 10px;
      font-size: 28px;
    }

    .contact-form p {
      color: #777;
      margin-bottom: 30px;
      font-size: 14px;
      max-width: 350px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group input,
    .input-group textarea {
      width: 100%;
      border: none;
      border-bottom: 2px solid #e5e5e5;
      padding: 10px 5px;
      font-size: 14px;
      outline: none;
      background: transparent;
    }

    .input-group textarea {
      resize: none;
      height: 80px;
    }

    .send-btn {
      margin-top: 10px;
      padding: 10px 30px;
      background: #000;
      color: #fff;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      transition: 0.2s ease;
    }

    .send-btn:hover {
      opacity: 0.8;
    }

    .contact-info {
      flex: 1;
      background: #111;
      color: #fff;
      padding: 50px 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 15px;
    }

    .contact-info h3 {
      margin-bottom: 15px;
    }

    .info-item {
      font-size: 14px;
      opacity: 0.9;
    }

    /* Decorative shapes */
    .shape-orange {
      position: absolute;
      right: -60px;
      top: 40px;
      width: 140px;
      height: 140px;
      background: #f2a900;
      border-radius: 16px;
      z-index: -1;
    }

    .shape-circle {
      position: absolute;
      left: -60px;
      top: -60px;
      width: 140px;
      height: 140px;
      border: 10px solid #f2a900;
      border-radius: 50%;
      z-index: -1;
    }
  </style>
</head>
<body>
  <div class="contact-wrapper">
    <div class="shape-orange"></div>
    <div class="shape-circle"></div>

    <div class="contact-form">
      <h2>Contact us</h2>
      <p>
        Please don't hesitate to reach out whenever you need assistance. We’ll
        make sure to respond to you promptly.
      </p>

      <div class="input-group">
        <input type="text" placeholder="Name" />
      </div>

      <div class="input-group">
        <input type="email" placeholder="Email" />
      </div>

      <div class="input-group">
        <textarea placeholder="Message"></textarea>
      </div>

      <button class="send-btn">Message</button>
    </div>

    <div class="contact-info">
      <h3>Info</h3>
      <div class="info-item">📧 copyright3@mokimapublishing.co.za</div>
      <div class="info-item">📞 +27 123456789</div>
      <div class="info-item">📍 Sloane Street</div>
      <div class="info-item">🕘 09:00 – 17:00</div>
    </div>
  </div>
</body>
</html>