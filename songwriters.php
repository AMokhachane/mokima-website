<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Songwriters</title>

<style>
/* RESET & BASE */
* {
  box-sizing: border-box;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

body {
  margin: 0;
  min-height: 100vh;
  background: #e6e6e6;
}

/* Page container fills screen minus navbar */
.page-container {
  min-height: 100vh;
  padding: 140px 20px 40px; /* space for navbar */
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

/* Carousel */
.artists-carousel {
      overflow: hidden;
      width: 80%;
      padding: 5px 0;
    }

    .carousel-track {
      display: flex;
      transition: transform 0.8s ease-in-out;
    }

    .artist-tile {
    position: relative; /* ensures child can be absolute */
    flex: 0 0 calc(100% / 3);
    padding: 5px;
}

.artist-tile img {
    width: 100%;
    height: 330px; /* increase size if needed */
    object-fit: cover;
    border-radius: 15px;
}

.tile-name {
    position: absolute;
    bottom: 10px; /* sits near bottom of image */
    left: 36%;
    transform: translateX(-50%);
    background: rgba(190, 202, 21, 0.6); /* semi-transparent black */
    color: white;
    padding: 6px 12px;
    width: 70%;
    font-weight: bold;
    font-size: 0.95rem;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    text-align: center;
    letter-spacing: 1px;
}

/* Responsive */
    @media (max-width: 900px) {
      .artist-tile {
        flex: 0 0 50%;
      }
      .artist-tile img {
        height: 200px;
      }
    }

    @media (max-width: 600px) {
      .artist-tile {
        flex: 0 0 100%;
      }
      .artist-tile img {
        height: 180px;
      }
    }
</style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="page-container">
  <div>
    <h1>OUR SONGWRITERS</h1>
    <div class="subheading">Writers, Producers & Composers</div>
  </div>

  <!-- Carousel -->
  <div class="artists-carousel">
    <div class="carousel-track" id="carouselTrack">

      <div class="artist-tile">
        <img src="assets/boohle.jpg" alt="BOOHLE">
        <div class="tile-name">BOOHLE</div>
      </div>
      <div class="artist-tile">
        <img src="assets/sykes.jpeg" alt="SYKES">
        <div class="tile-name">SYKES</div>
      </div>
      <div class="artist-tile">
        <img src="assets/russell.jpg" alt="RUSSELL ZUMA">
        <div class="tile-name">RUSSELL ZUMA</div>
      </div>
      <div class="artist-tile">
        <img src="assets/khuzani.jpg" alt="KHUZANI">
        <div class="tile-name">KHUZANI</div>
      </div>
      <div class="artist-tile">
        <img src="assets/sir.jpg" alt="SIR TRILL">
        <div class="tile-name">SIR TRILL</div>
      </div>
      <div class="artist-tile">
        <img src="assets/naledi.jpg" alt="NALEDI APHIWE">
        <div class="tile-name">NALEDI APHIWE</div>
      </div>
      <div class="artist-tile">
        <img src="assets/vigro.jpg" alt="VIGRO DEEP">
        <div class="tile-name">VIGRO DEEP</div>
      </div>
      <div class="artist-tile">
        <img src="assets/kay.jpg" alt="PRINCE KAYBEE">
        <div class="tile-name">PRINCE KAYBEE</div>
      </div>

      <!-- duplicates for smooth loop -->
      <div class="artist-tile">
        <img src="assets/boohle.jpg" alt="BOOHLE">
        <div class="tile-name">BOOHLE</div>
      </div>
      <div class="artist-tile">
        <img src="assets/sykes.png" alt="SYKES">
        <div class="tile-name">SYKES</div>
      </div>
      <div class="artist-tile">
        <img src="assets/russell.jpg" alt="RUSSELL ZUMA">
        <div class="tile-name">RUSSELL ZUMA</div>
      </div>

    </div>
  </div>

  <!-- Footer: use same contact-footer as contact page -->
  <footer class="contact-footer">
    <p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>
    <div class="socials">
      <a href="https://www.facebook.com/MokimaPublishing" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.tiktok.com/@mokima_publishing" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
      <a href="https://www.instagram.com/mokimapublishing" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>
</div>

<script>
const track = document.getElementById("carouselTrack");
const visibleTiles = 5;
let index = 0;

setInterval(() => {
  index++;
  track.style.transform = `translateX(-${index * (100 / visibleTiles)}%)`;

  if (index >= track.children.length - visibleTiles) {
    setTimeout(() => {
      track.style.transition = "none";
      track.style.transform = "translateX(0)";
      index = 0;
      setTimeout(() => { track.style.transition = "transform 0.8s ease-in-out"; }, 50);
    }, 800);
  }
}, 4000);
</script>

</body>
</html>