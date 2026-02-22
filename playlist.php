<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Playlists | Mokima Music & Publishing</title>
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

    .header {
      background: #111;
      color: #fff;
      padding: 60px 50px;
      border-radius: 18px;
      margin-bottom: 60px;
      position: relative;
      overflow: hidden;
    }

    .header::after {
      content: "";
      position: absolute;
      right: -60px;
      top: -60px;
      width: 160px;
      height: 160px;
      background: #f2a900;
      border-radius: 24px;
      opacity: 0.9;
    }

    .header h1 {
      margin: 0 0 10px;
      font-size: 36px;
    }

    .header p {
      max-width: 520px;
      opacity: 0.85;
      line-height: 1.6;
    }

    .playlist-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }

    .playlist-card {
      background: #fff;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      transition: transform 0.2s ease;
      cursor: pointer;
    }

    .playlist-card:hover {
      transform: translateY(-6px);
    }

    .playlist-cover {
      height: 160px;
      background: linear-gradient(135deg, #f2a900, #111);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 32px;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .playlist-body {
      padding: 20px;
    }

    .playlist-body h3 {
      margin: 0 0 5px;
      font-size: 18px;
    }

    .playlist-body p {
      margin: 0;
      font-size: 13px;
      color: #666;
      line-height: 1.5;
    }

    .tag {
      display: inline-block;
      margin-top: 10px;
      background: #f2a900;
      color: #111;
      font-size: 11px;
      padding: 4px 10px;
      border-radius: 20px;
      font-weight: 600;
    }

    @media (max-width: 768px) {
      .header {
        padding: 40px 30px;
      }
    }
  </style>
</head>
<body>

  <div class="container">

    <!-- HEADER -->
    <section class="header">
      <h1>Our Playlists</h1>
      <p>
        Discover curated playlists featuring African composers, emerging artists,
        and sync-ready tracks perfect for film, TV, and advertising.
      </p>
    </section>

    <!-- PLAYLISTS -->
    <section class="playlist-grid">

      <div class="playlist-card">
        <div class="playlist-cover">SYNC</div>
        <div class="playlist-body">
          <h3>Sync Ready</h3>
          <p>
            Cinematic, emotional and commercial-ready tracks ideal for film, TV
            and advertising placements.
          </p>
          <span class="tag">Film & TV</span>
        </div>
      </div>

      <div class="playlist-card">
        <div class="playlist-cover">AFRO</div>
        <div class="playlist-body">
          <h3>Afro Pop Essentials</h3>
          <p>
            A vibrant collection of Afro-pop and contemporary African sounds
            with global appeal.
          </p>
          <span class="tag">Afro Pop</span>
        </div>
      </div>

      <div class="playlist-card">
        <div class="playlist-cover">CHILL</div>
        <div class="playlist-body">
          <h3>Chill & Soulful</h3>
          <p>
            Smooth, laid-back and soulful tracks perfect for relaxed listening
            or lifestyle content.
          </p>
          <span class="tag">Soul / Chill</span>
        </div>
      </div>

      <div class="playlist-card">
        <div class="playlist-cover">BEATS</div>
        <div class="playlist-body">
          <h3>Instrumental Beats</h3>
          <p>
            High-quality instrumentals and background music for content creators
            and media projects.
          </p>
          <span class="tag">Instrumentals</span>
        </div>
      </div>

      <div class="playlist-card">
        <div class="playlist-cover">NEW</div>
        <div class="playlist-body">
          <h3>New Releases</h3>
          <p>
            Fresh music from our catalogue showcasing new talent and recent
            releases.
          </p>
          <span class="tag">Latest</span>
        </div>
      </div>

      <div class="playlist-card">
        <div class="playlist-cover">ALT</div>
        <div class="playlist-body">
          <h3>Alternative Sounds</h3>
          <p>
            Unique and experimental sounds from African composers pushing
            creative boundaries.
          </p>
          <span class="tag">Alternative</span>
        </div>
      </div>

    </section>

  </div>

</body>
</html>