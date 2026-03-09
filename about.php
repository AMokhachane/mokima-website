<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>About Mokima Publishing</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* RESET & BASE */
*{
box-sizing:border-box;
font-family:"Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

body{
margin:0;
min-height:100vh;
background:#e6e6e6;
}

/* NAVBAR */

nav{
width:100%;
position:fixed;
top:0;
left:0;
z-index:100;
background:#fff;
box-shadow:0 2px 5px rgba(0,0,0,0.1);
padding:15px 30px;
display:flex;
justify-content:space-between;
align-items:center;
}

nav a{
text-decoration:none;
color:#111;
margin:0 15px;
font-weight:600;
transition:color .2s;
}

nav a:hover{
color:#381ab0;
}

/* PAGE CONTAINER */

.page-container{
padding:120px 20px 40px;
max-width:1100px;
margin:auto;
}

/* PAGE TITLE */

h1{
font-size:1.8rem;
color:#111;
margin-bottom:5px;
text-align:center;
}

.subheading{
font-size:0.95rem;
color:#666;
letter-spacing:1.5px;
margin-bottom:40px;
text-transform:uppercase;
text-align:center;
}

/* CARD LAYOUT */

.section{
background:#fff;
padding:30px 35px;
border-radius:14px;
box-shadow:0 3px 8px rgba(0,0,0,0.12);
margin-bottom:25px;
}

/* HEADINGS */

.section h2{
font-size:1.4rem;
color:#f0c040;
margin-bottom:15px;
}

.section h3{
font-size:1.05rem;
color:#111;
margin:15px 0 6px;
}

/* TEXT */

.section p{
font-size:14px;
color:#555;
line-height:1.7;
margin-bottom:12px;
}

/* HIGHLIGHT */

.highlight{
background:#fff6cc;
padding:3px 6px;
border-radius:4px;
}

/* FOOTER */

.contact-footer{
max-width:1100px;
margin:40px auto 10px;
display:flex;
justify-content:center;
align-items:center;
gap:40px;
flex-wrap:wrap;
font-size:13px;
color:#555;
}

.socials{
display:flex;
gap:16px;
}

.socials a{
color:#444;
font-size:16px;
transition:.2s;
}

.socials a:hover{
transform:translateY(-2px);
color:#000;
}

/* MOBILE */

@media(max-width:900px){

.section{
padding:25px 20px;
}

}

</style>
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="page-container">

<h1>ABOUT MOKIMA PUBLISHING</h1>
<div class="subheading">Supporting Songwriters, Authors & Publishers</div>

<div class="section">

<h2>Who We Are</h2>

<p>
Established in 2002, we are an independent South African music publishing company dedicated to supporting composers, authors, and publishers in managing their musical works. Our services include
<span class="highlight">licensing, royalty collection, and fee negotiation</span>
for the use of our catalogue.
</p>

<p>
We actively promote songs for advertising, film, and promotional campaigns, while seeking out sync opportunities to maximize exposure. Additionally, we facilitate
<span class="highlight">songwriter collaborations</span>
to foster creativity and create new music, ensuring our clients receive the support and opportunities they need to thrive in the music industry.
</p>

</div>


<div class="section">

<h2>How We Support You</h2>

<h3>Maximising Royalties</h3>
<p>Our team ensures that you receive all the royalties to which you’re entitled, collecting and tracking earnings from various sources.</p>

<h3>Rights Management</h3>
<p>We handle the intricate process of registering your works with collection societies.</p>

<h3>Licensing and Sync Opportunities</h3>
<p>Through our extensive network of industry contacts, we actively seek out licensing and synchronization opportunities for your music.</p>

<h3>Transparent Reporting</h3>
<p>Transparency is at the core of our business. Statements are issued quarterly.</p>

<h3>Personalised Support</h3>
<p>Our dedicated team provides personalised support every step of the way, whether you have questions about royalty statements, splits, song lists, etc.</p>

</div>


<div class="section">

<h2>Thank You</h2>

<p>
Thank you for considering Mokima Music and Publishing as your publishing administration partner. We look forward to the possibility of working together and supporting your journey in the music industry.
</p>

</div>

</div>


<footer class="contact-footer">

<p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>

<div class="socials">

<a href="https://www.facebook.com/MokimaPublishing" target="_blank">
<i class="fab fa-facebook-f"></i>
</a>

<a href="https://www.tiktok.com/@mokima_publishing" target="_blank">
<i class="fab fa-tiktok"></i>
</a>

<a href="https://www.instagram.com/mokimapublishing" target="_blank">
<i class="fab fa-instagram"></i>
</a>

</div>

</footer>

</body>
</html>