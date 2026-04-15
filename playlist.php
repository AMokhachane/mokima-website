<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mokima Player</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

*{
box-sizing:border-box;
margin:0;
padding:0;
font-family:"Segoe UI",sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background: radial-gradient(circle at center,#f0c040,#b88a1c,#3a2a06);
overflow:hidden;
padding-top:90px;
}

/* NAVBAR SPACE */
nav{
position:fixed;
top:0;
left:0;
width:100%;
z-index:1000;
}

/* PLAYER AREA */
.player-container{
position:relative;
width:900px;
height:420px;
display:flex;
justify-content:center;
align-items:center;
}

/* CARD BASE */
.music-card{
position:absolute;
width:220px;
height:300px;
border-radius:20px;
overflow:hidden;
background:rgba(255,255,255,0.15);
backdrop-filter:blur(20px);
box-shadow:0 10px 40px rgba(0,0,0,0.4);
transition:0.4s;
cursor:pointer;
}

.music-card img{
width:100%;
height:100%;
object-fit:cover;
}

/* CENTER CARD */
.card-main{
width:260px;
height:340px;
z-index:5;
transform:translateX(0) scale(1.1);
}

/* LEFT */
.card-left1{
transform:translateX(-200px) rotateY(30deg) scale(.9);
z-index:3;
}

.card-left2{
transform:translateX(-360px) rotateY(35deg) scale(.8);
z-index:2;
}

/* RIGHT */
.card-right1{
transform:translateX(200px) rotateY(-30deg) scale(.9);
z-index:3;
}

.card-right2{
transform:translateX(360px) rotateY(-35deg) scale(.8);
z-index:2;
}

/* PLAYER BAR */
.music-bar{
position:absolute;
bottom:-140px;
width:800px;
height:120px;
background:rgba(255,255,255,0.15);
backdrop-filter:blur(25px);
border-radius:30px;
display:flex;
align-items:center;
justify-content:center;
padding:10px;
box-shadow:0 8px 30px rgba(0,0,0,0.4);
}

/* SPOTIFY PLAYER */
iframe{
border-radius:12px;
}

</style>
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="player-container">

<!-- PLAYLIST CARDS -->
<div class="music-card" data-index="0">
<img src="assets/soul.jpg">
</div>

<div class="music-card" data-index="1">
<img src="assets/p2.jpg">
</div>

<div class="music-card" data-index="2">
<img src="assets/p3.jpg">
</div>

<div class="music-card" data-index="3">
<img src="assets/p4.png">
</div>

<div class="music-card" data-index="4">
<img src="assets/p5.jpg">
</div>


<!-- PLAYER BAR -->
<div class="music-bar">

<iframe id="spotifyPlayer"
src="https://open.spotify.com/embed/playlist/6BB7hYaIWMdChARKgzKa4Q"
width="100%"
height="100"
frameBorder="0"
allowfullscreen=""
allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
</iframe>

</div>

</div>


<script>

const playlists = [

"https://open.spotify.com/embed/playlist/6Gz97imVaIBfUHzDYYcAiC",
"https://open.spotify.com/embed/playlist/0gxT6zTw8BJiCWDZgiijHz",
"https://open.spotify.com/embed/playlist/6BB7hYaIWMdChARKgzKa4Q",
"https://open.spotify.com/embed/playlist/6HCqaZMBjbc7elOhOhJfL6",
"https://open.spotify.com/embed/playlist/555LAwb29kYJPFOuqhb51F"

];

const cards = document.querySelectorAll(".music-card");

let activeIndex = 2; // default center playlist

function updateCarousel(){

cards.forEach((card,i)=>{

card.className="music-card";

let offset = i - activeIndex;

if(offset===0) card.classList.add("card-main");
if(offset===-1) card.classList.add("card-left1");
if(offset===-2) card.classList.add("card-left2");
if(offset===1) card.classList.add("card-right1");
if(offset===2) card.classList.add("card-right2");

});

}

function loadPlaylist(index){

activeIndex=index;

document.getElementById("spotifyPlayer").src = playlists[index];

updateCarousel();

}

cards.forEach(card=>{
card.addEventListener("click",()=>{

let index=parseInt(card.dataset.index);

loadPlaylist(index);

});
});

updateCarousel();

</script>

</body>
</html>