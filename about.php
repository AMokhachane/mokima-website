<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>What We Do | Mokima Music & Publishing</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      background: #f7f7f7;
      color: #111;
    }

    .container {
      max-width: 1100px;
      margin: 80px auto;
      padding: 0 20px;
    }

    .hero {
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 40px;
      background: #fff;
      border-radius: 16px;
      padding: 50px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.08);
      margin-bottom: 60px;
      position: relative;
      overflow: hidden;
    }

    .hero::after {
      content: "";
      position: absolute;
      right: -60px;
      top: -60px;
      width: 160px;
      height: 160px;
      background: #f2a900;
      border-radius: 24px;
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 1;
    }

    .badge {
      display: inline-block;
      background: #f2a900;
      color: #111;
      padding: 6px 14px;
      border-radius: 20px;
      font-size: 12px;
      margin-bottom: 15px;
      font-weight: 600;
    }

    h1 {
      font-size: 36px;
      margin: 0 0 15px;
    }

    .subtitle {
      color: #666;
      max-width: 500px;
      line-height: 1.6;
    }

    .stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-top: 30px;
    }

    .stat {
      background: #111;
      color: #fff;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
    }

    .stat h3 {
      margin: 0;
      font-size: 22px;
    }

    .stat p {
      margin: 5px 0 0;
      font-size: 12px;
      opacity: 0.9;
    }

    .section {
      margin-bottom: 70px;
    }

    .section h2 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    .section p {
      color: #555;
      max-width: 700px;
      line-height: 1.7;
    }

    .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .service-card {
      background: #fff;
      border-radius: 14px;
      padding: 25px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.06);
      transition: transform 0.2s ease;
    }

    .service-card:hover {
      transform: translateY(-5px);
    }

    .service-card h4 {
      margin: 0 0 10px;
    }

    .service-card p {
      font-size: 14px;
      color: #666;
      line-height: 1.6;
    }

    .cta {
      background: #111;
      color: #fff;
      border-radius: 16px;
      padding: 50px;
      display: grid;
      grid-template-columns: 1.5fr 1fr;
      gap: 30px;
      align-items: center;
    }

    .cta h2 {
      margin: 0 0 10px;
    }

    .cta p {
      opacity: 0.85;
      line-height: 1.6;
    }

    .cta a {
      justify-self: start;
      background: #f2a900;
      color: #111;
      padding: 12px 28px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.2s ease;
    }

    .cta a:hover {
      opacity: 0.85;
    }

    @media (max-width: 768px) {
      .hero, .cta {
        grid-template-columns: 1fr;
      }

      .stats {
        grid-template-columns: 1fr 1fr;
      }
    }
  </style>
</head>
<body>

  <div class="container">

    <!-- HERO / ABOUT -->
    <section class="hero">
      <div class="hero-content">
        <span class="badge">Since 2002</span>
        <h1>What We Do</h1>
        <p class="subtitle">
          Mokima Music & Publishing is an independent South African music publishing company
          dedicated to supporting composers, authors, and publishers in managing and maximizing
          the value of their musical works.
        </p>

        <div class="stats">
          <div class="stat">
            <h3>2002</h3>
            <p>Established</p>
          </div>
          <div class="stat">
            <h3>Publishing</h3>
            <p>Administration & Representation</p>
          </div>
          <div class="stat">
            <h3>Africa</h3>
            <p>Composers & Publishers</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="section">
      <h2>About Us</h2>
      <p>
        Established in 2002, Mokima Music & Publishing proudly administers and represents
        African composers and publishers. We manage musical works through licensing, royalty
        collection, and fee negotiation, while actively promoting songs for advertising, film,
        and promotional campaigns. We also seek synchronization opportunities to maximize
        exposure and facilitate songwriter collaborations to foster creativity and new music.
      </p>
    </section>

    <!-- SERVICES -->
    <section class="section">
      <h2>How We Support You</h2>

      <div class="services">
        <div class="service-card">
          <h4>Maximising Royalties</h4>
          <p>
            We ensure you receive all the royalties you’re entitled to by collecting and tracking
            earnings from multiple sources worldwide.
          </p>
        </div>

        <div class="service-card">
          <h4>Rights Management</h4>
          <p>
            We handle the complex process of registering your works with collection societies and
            managing your catalogue.
          </p>
        </div>

        <div class="service-card">
          <h4>Licensing & Sync</h4>
          <p>
            Through our industry network, we actively seek licensing and synchronization
            opportunities for film, TV, and advertising.
          </p>
        </div>

        <div class="service-card">
          <h4>Transparent Reporting</h4>
          <p>
            Transparency is core to our business. We provide clear, quarterly royalty statements
            so you always know where you stand.
          </p>
        </div>

        <div class="service-card">
          <h4>Personalised Support</h4>
          <p>
            Our dedicated team offers hands-on support with royalty statements, splits, song lists,
            and career guidance.
          </p>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta">
      <div>
        <h2>Partner with Mokima Music & Publishing</h2>
        <p>
          Thank you for considering Mokima Music & Publishing as your publishing administration partner.
          We look forward to supporting your journey in the music industry.
        </p>
      </div>
      <a href="contact.html">Contact Us</a>
    </section>

  </div>

</body>
</html>