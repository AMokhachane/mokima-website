<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>About Mokima Publishing</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
/* ============================= */
/* CSS VARIABLES FOR SPACING */
/* ============================= */
:root {
  --team-margin-top: 10px;       /* change this to move team section down/up */
  --team-margin-bottom: 10px;    /* space below team before CTA */

  --cta-margin-top: 10px;        /* space above CTA section */
  --cta-margin-bottom: 3px;     /* space below CTA section before footer */

  --footer-margin-top: 3px;     /* space above footer */
}

/* RESET */
* { margin:0; padding:0; box-sizing:border-box; font-family:"Segoe UI", sans-serif; }
body { background:#f4f5f7; color:#333; line-height:1.6; }

/* NAVBAR */
nav{
  position:fixed; top:0; left:0; width:100%; background:#fff; padding:15px 30px;
  display:flex; justify-content:space-between; align-items:center;
  box-shadow:0 2px 8px rgba(0,0,0,0.08); z-index:100;
}
nav a{ text-decoration:none; margin:0 15px; font-weight:600; color:#111; transition:.2s; }
nav a:hover{ color:#381ab0; }

/* HERO */
.hero{
  background: linear-gradient(135deg,#f0c04033,#ffffff);
  text-align:center; 
  padding: 120px 20px 80px;
}
.hero h1{ font-size:3rem; margin-bottom:10px; }
.hero .subheading{ font-size:1.1rem; text-transform:uppercase; color:#666; }

/* SECTIONS */
.section{
  max-width:1100px; 
  margin: 60px auto; 
  padding: 0 20px; 
}
.section h2{
  color:#f0c040; 
  font-size:2rem; 
  margin-bottom:25px; 
  text-align:center; 
}
.section p{
  margin-bottom:18px; 
  text-align:center; 
}
.highlight{ background:#fff6cc; padding:3px 6px; border-radius:4px; }

/* FEATURES ROW */
.features{
  display:flex; 
  flex-wrap:wrap; 
  justify-content:center; 
  margin-top:50px; 
  gap:25px;
}
.feature-card{
  background:#fff; flex:1 1 200px; padding:25px; border-radius:14px;
  box-shadow:0 4px 12px rgba(0,0,0,0.08); transition:.3s; text-align:center;
}
.feature-card:hover{
  transform:translateY(-5px); 
  box-shadow:0 8px 18px rgba(0,0,0,0.12); 
}
.feature-card i{ font-size:2rem; color:#381ab0; margin-bottom:12px; display:block; }

/* TEAM */
.team{
  max-width:1100px; 
  margin: var(--team-margin-top) auto var(--team-margin-bottom) auto;
  text-align:center; 
  padding:0 20px; 
}
.team h2{
  color:#f0c040; 
  font-size:2rem; 
  margin-bottom:40px; 
}
.team-members{
  display:flex; 
  flex-wrap:wrap; 
  justify-content:center; 
  gap:30px;
}
.member{
  background:#fff; border-radius:14px; padding:20px; width:200px;
  box-shadow:0 4px 12px rgba(0,0,0,0.08); transition:.3s;
}
.member:hover{
  transform:translateY(-5px); 
  box-shadow:0 8px 18px rgba(0,0,0,0.12);
}
.member img{
  width:100px; height:100px; border-radius:50%; object-fit:cover; margin-bottom:10px; 
}
.member h3{ margin-bottom:5px; font-size:1.05rem; }
.member p{ font-size:0.85rem; color:#555; }

/* THANK YOU / CTA */
.cta-section {
  background: #f4f5f7;
  color: #f0c040;
  text-align: center;
  padding: 80px 20px;
  border-radius: 14px;
  display: flex;
  flex-direction: column;
  justify-content: center; 
  align-items: center;
  margin: var(--cta-margin-top) auto var(--cta-margin-bottom) auto;
}
.cta-section h2{ margin-bottom:25px; }
.cta-section p{ margin-bottom:30px; }
.cta-section a {
  background:#f0c040; 
  color:#111; 
  padding:12px 30px; 
  border-radius:8px; 
  font-weight:600; 
  text-decoration:none; 
  transition:.3s;
  display:inline-block;       
  text-align:center;
}
.cta-section a:hover { background:#d1a800; }

/* FOOTER */
footer{
  text-align:center; padding:40px 20px; color:#555; font-size:13px; 
  display:flex; flex-direction:column; gap:20px; align-items:center; 
  margin-top: var(--footer-margin-top);
}
footer .socials{ display:flex; gap:16px; }
footer .socials a{ color:#444; font-size:18px; transition:0.2s; }
footer .socials a:hover{ color:#000; transform:translateY(-2px); }

/* RESPONSIVE */
@media(max-width:900px){ 
  .features{ flex-direction:column; align-items:center; } 
  .team-members{ flex-direction:column; align-items:center; } 
}
</style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- HERO -->
<div class="hero">
  <h1>About Mokima Publishing</h1>
  <div class="subheading">Supporting Songwriters, Authors & Publishers</div>
</div>

<!-- WHO WE ARE -->
<div class="section">
  <h2>Who We Are</h2>
  <p>Established in 2002, we are an independent South African music publishing company dedicated to supporting composers, authors, and publishers in managing their musical works. Our services include <span class="highlight">licensing, royalty collection, and fee negotiation</span>.</p>
  <p>We actively promote songs for advertising, film, and promotional campaigns, and facilitate <span class="highlight">songwriter collaborations</span> to foster creativity.</p>
</div>

<!-- HOW WE SUPPORT YOU -->
<div class="section">
  <h2>How We Support You</h2>
  <div class="features">
    <div class="feature-card"><i class="fas fa-coins"></i><h3>Maximising Royalties</h3></div>
    <div class="feature-card"><i class="fas fa-file-contract"></i><h3>Rights Management</h3></div>
    <div class="feature-card"><i class="fas fa-music"></i><h3>Licensing & Sync</h3></div>
    <div class="feature-card"><i class="fas fa-chart-line"></i><h3>Transparent Reporting</h3></div>
    <div class="feature-card"><i class="fas fa-user-friends"></i><h3>Personalised Support</h3></div>
  </div>
</div>

<!-- TEAM -->
<div class="team" id="team">
  <h2>Meet Our Team</h2>
  <div class="team-members">
    <div class="member"><img src="assets/people.jpg" alt=""><h3>Thuli M</h3><p>Founder & CEO</p></div>
    <div class="member"><img src="assets/people.jpg" alt=""><h3>Ouma</h3><p>Operations Manager</p></div>
    <div class="member"><img src="assets/male.jpg" alt=""><h3>Khotso</h3><p>Creative Director</p></div>
    <div class="member"><img src="assets/male.jpg" alt=""><h3>Brendon T</h3><p>Client Relations</p></div>
  </div>
</div>

<!-- THANK YOU CTA -->
<div class="cta-section">
  <h2>Let’s Work Together</h2>
  <p>We look forward to supporting your journey in the music industry.</p>
  <a href="contact.php">Contact Us</a>
</div>

<!-- FOOTER -->
<footer>
  <p>Copyright © 2022 Mokima Publishing. All Rights Reserved.</p>
  <div class="socials">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-tiktok"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
  </div>
</footer>

</body>
</html>