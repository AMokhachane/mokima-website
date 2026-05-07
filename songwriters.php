<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Our Songwriters</title>

<style>

/* RESET */
* {
  box-sizing: border-box;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

body {
  margin: 0;
  min-height: 100vh;
  background: #e6e6e6;
  overflow-x: hidden;
}

/* PAGE WRAPPER */
.page-container {
  min-height: 100vh;
  padding: 140px 20px 60px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* TITLE */
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

/* ===== CAROUSEL ===== */
.artists-carousel {
  overflow: hidden;
  width: 85%;
  max-width: 1100px;
}

.carousel-track {
  display: flex;
  transition: transform 0.8s ease-in-out;
}

/* DESKTOP */
.artist-tile {
  position: relative;
  flex: 0 0 calc(100% / 3);
  padding: 8px;
}

.artist-tile img {
  width: 100%;
  height: 330px;
  object-fit: cover;
  border-radius: 15px;
}

/* NAME */
.tile-name {
  position: absolute;
  bottom: 15px;
  left: 50%;
  transform: translateX(-50%);
  background: rgba(190, 202, 21, 0.6);
  color: white;
  padding: 6px 12px;
  width: 75%;
  font-weight: bold;
  font-size: 0.95rem;
  border-radius: 10px;
  text-align: center;
}

/* FOOTER */
.contact-footer {
  margin-top: 40px;
  text-align: center;
  color: #333;
}

/* ===== TABLET ===== */
@media (max-width: 900px) {
  .artist-tile {
    flex: 0 0 50%;
  }

  .artist-tile img {
    height: 250px;
  }
}

/* ===== MOBILE ===== */
@media (max-width: 600px) {

  .page-container {
    padding-top: 120px;
  }

  .artist-tile {
    flex: 0 0 100%;
  }

  .artist-tile img {
    height: 240px;
  }

  .tile-name {
    font-size: 0.85rem;
    width: 85%;
  }

  .artists-carousel {
    width: 95%;
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

  <!-- CAROUSEL -->
  <div class="artists-carousel">
    <div class="carousel-track" id="carouselTrack">

      <div class="artist-tile">
        <img src="assets/goon.jpg">
        <div class="tile-name">Goon Flavour</div>
      </div>

      <div class="artist-tile">
        <img src="assets/sir.jpg">
        <div class="tile-name">SIR TRILL</div>
      </div>

      <div class="artist-tile">
        <img src="assets/naledi.jpg">
        <div class="tile-name">NALEDI APHIWE</div>
      </div>

      <div class="artist-tile">
        <img src="assets/boohle.jpg">
        <div class="tile-name">BOOHLE</div>
      </div>

      <div class="artist-tile">
        <img src="assets/amzin.jpg">
        <div class="tile-name">AMZIN DEEP</div>
      </div>

      <div class="artist-tile">
        <img src="assets/russell.jpg">
        <div class="tile-name">RUSSELL ZUMA</div>
      </div>

      <div class="artist-tile">
        <img src="assets/beast.jpg">
        <div class="tile-name">BEAST RSA</div>
      </div>

      <div class="artist-tile">
        <img src="assets/kay.jpg">
        <div class="tile-name">PRINCE KAYBEE</div>
      </div>

    </div>
  </div>

  <!-- FOOTER -->
  <footer class="contact-footer">
    <p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>
  </footer>

</div>

<!-- ===== CAROUSEL SCRIPT (FIXED RESPONSIVE LOGIC) ===== -->
<script>

const track = document.getElementById("carouselTrack");
let index = 0;

function getVisibleTiles() {
  if (window.innerWidth <= 600) return 1;
  if (window.innerWidth <= 900) return 2;
  return 3;
}

function slideCarousel() {
  const visibleTiles = getVisibleTiles();

  index++;

  track.style.transform = `translateX(-${index * (100 / visibleTiles)}%)`;

  if (index >= track.children.length - visibleTiles) {

    setTimeout(() => {
      track.style.transition = "none";
      track.style.transform = "translateX(0)";
      index = 0;

      setTimeout(() => {
        track.style.transition = "transform 0.8s ease-in-out";
      }, 50);

    }, 800);
  }
}

setInterval(slideCarousel, 2500);

window.addEventListener("resize", () => {
  track.style.transition = "none";
  track.style.transform = "translateX(0)";
  index = 0;

  setTimeout(() => {
    track.style.transition = "transform 0.8s ease-in-out";
  }, 50);
});

</script>

</body>
</html>