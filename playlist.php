<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:radial-gradient(circle at center,#f0c040,#b88a1c,#3a2a06);
overflow-x:hidden;
padding-top:90px;
}

/* NAVBAR */
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

/* CARD */

.music-card{
position:absolute;
width:220px;
height:300px;
border-radius:20px;
overflow:hidden;
background:rgba(255,255,255,.15);
backdrop-filter:blur(20px);
box-shadow:0 10px 40px rgba(0,0,0,.4);
transition:.4s;
cursor:pointer;
}

.music-card img{
width:100%;
height:100%;
object-fit:cover;
display:block;
}

/* DESKTOP POSITIONS */

.card-main{
width:260px;
height:340px;
z-index:5;
transform:translateX(0) scale(1.1);
}

.card-left1{
transform:translateX(-200px) rotateY(30deg) scale(.9);
z-index:3;
}

.card-left2{
transform:translateX(-360px) rotateY(35deg) scale(.8);
z-index:2;
}

.card-right1{
transform:translateX(200px) rotateY(-30deg) scale(.9);
z-index:3;
}

.card-right2{
transform:translateX(360px) rotateY(-35deg) scale(.8);
z-index:2;
}

/* PLAYER */

.music-bar{
position:absolute;
bottom:-140px;
width:800px;
height:120px;
background:rgba(255,255,255,.15);
backdrop-filter:blur(25px);
border-radius:30px;
display:flex;
align-items:center;
justify-content:center;
padding:10px;
box-shadow:0 8px 30px rgba(0,0,0,.4);
}

.music-bar iframe{
border-radius:12px;
}

/* DOTS */

.dots{
position:absolute;
bottom:-40px;
display:none;
gap:10px;
}

.dot{
width:11px;
height:11px;
border-radius:50%;
background:rgba(255,255,255,.45);
transition:.3s;
}

.dot.active{
background:white;
transform:scale(1.3);
}

/* ===========================
        MOBILE
=========================== */

@media (max-width:768px){

.player-container{
width:100%;
height:520px;
overflow:hidden;
}

/* One card only */

.music-card{
width:240px;
height:320px;
left:50%;
top:15px;
transform:translateX(-50%);
opacity:0;
pointer-events:none;
transition:.35s;
}

/* active */

.card-main{
opacity:1;
pointer-events:auto;
transform:translateX(-50%) scale(1);
z-index:5;
}

/* hide side cards */

.card-left1,
.card-left2,
.card-right1,
.card-right2{
opacity:0;
pointer-events:none;
transform:translateX(-50%);
}

/* player */

.music-bar{
width:95%;
height:110px;
bottom:-120px;
border-radius:22px;
}

.music-bar iframe{
height:95px;
}

/* dots */

.dots{
display:flex;
}

}

/* SMALL PHONES */

@media (max-width:480px){

.music-card{
width:200px;
height:280px;
}

.music-bar{
height:105px;
}

}

</style>

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="player-container">

<!-- PLAYLIST CARDS -->

<div class="music-card" data-index="1">
<img src="assets/mokima.jpg">
</div>

<div class="music-card" data-index="2">
<img src="assets/mokima.jpg">
</div>

<div class="music-card" data-index="0">
<img src="assets/mokima.jpg">
</div>

<div class="music-card" data-index="3">
<img src="assets/mokima.jpg">
</div>

<div class="music-card" data-index="4">
<img src="assets/mokima.jpg">
</div>

<!-- PLAYER BAR -->
<div class="music-bar">

<iframe id="spotifyPlayer"
src="https://open.spotify.com/embed/playlist/6Gz97imVaIBfUHzDYYcAiC"
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
"https://open.spotify.com/embed/playlist/0gxT6zTw8BJiCWDZgiijHz",
"https://open.spotify.com/embed/playlist/6BB7hYaIWMdChARKgzKa4Q",
"https://open.spotify.com/embed/playlist/6Gz97imVaIBfUHzDYYcAiC",
"https://open.spotify.com/embed/playlist/6HCqaZMBjbc7elOhOhJfL6",
"https://open.spotify.com/embed/playlist/555LAwb29kYJPFOuqhb51F"
];

const cards = document.querySelectorAll(".music-card");

let activeIndex = 2;

function updateCarousel(){

    const mobile = window.innerWidth <= 768;

    cards.forEach(card=>{

        card.className = "music-card";

        const index = parseInt(card.dataset.index);

        let offset = index - activeIndex;

        // wrap around
        if(offset > 2) offset -= playlists.length;
        if(offset < -2) offset += playlists.length;

        if(mobile){

            if(offset === 0){
                card.classList.add("card-main");
            }

        }else{

            if(offset===0) card.classList.add("card-main");
            if(offset===-1) card.classList.add("card-left1");
            if(offset===-2) card.classList.add("card-left2");
            if(offset===1) card.classList.add("card-right1");
            if(offset===2) card.classList.add("card-right2");

        }

    });

}

function loadPlaylist(index){

    activeIndex = index;

    document.getElementById("spotifyPlayer").src = playlists[index];

    updateCarousel();

}

cards.forEach(card=>{

    card.addEventListener("click",()=>{

        loadPlaylist(parseInt(card.dataset.index));

    });

});

/* SWIPE */

let startX = 0;

const container = document.querySelector(".player-container");

container.addEventListener("touchstart",(e)=>{

    startX = e.touches[0].clientX;

});

container.addEventListener("touchend",(e)=>{

    const endX = e.changedTouches[0].clientX;

    const diff = startX - endX;

    if(Math.abs(diff) < 50) return;

    if(diff > 0){

        activeIndex = (activeIndex + 1) % playlists.length;

    }else{

        activeIndex = (activeIndex - 1 + playlists.length) % playlists.length;

    }

    loadPlaylist(activeIndex);

});

window.addEventListener("resize",updateCarousel);

updateCarousel();

</script>

</body>
</html>