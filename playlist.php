<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mokima Player</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,700;1,400&family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* RESET */
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: radial-gradient(circle at center, #f0c040, #b88a1c, #1f1602);
    overflow-x: hidden;
    padding: 120px 20px 40px;
    font-family: 'Plus Jakarta Sans', sans-serif;
}

/* NAVBAR PLATFORM */
nav{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
}

/* CAROUSEL APPARATUS WRAPPER */
.player-container{
    position: relative;
    width: 100%;
    max-width: 950px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    perspective: 1000px;
}

/* CORE ALBUM ART CARDS */
.music-card{
    position: absolute;
    width: 220px;
    height: 300px;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.45);
    transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1), opacity 0.5s ease, z-index 0.5s step-end;
    cursor: pointer;
    border: 1px solid rgba(255, 255, 255, 0.1);
    
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 24px;
    text-align: left;
}

/* DOWNTOWN-INSPIRED HIGH CONTRAST PALETTES */
.card-bg-0 { background: #e5dfcf; color: #111; } 
.card-bg-1 { background: #2b3a3a; color: #fff; } 
.card-bg-2 { background: #161616; color: #fff; } 
.card-bg-3 { background: #d96b43; color: #fff; } 
.card-bg-4 { background: #ebdcb9; color: #111; } 

/* CSS ART WORK BACKGROUND ASSETS */
.graphic-element {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    mix-blend-mode: multiply;
    opacity: 0.25;
}

.card-bg-0 .graphic-circle {
    width: 140px;
    height: 140px;
    background: #d96b43;
    top: 20px;
    right: -30px;
}

.card-bg-1 .graphic-bars {
    position: absolute;
    bottom: 0;
    right: 10px;
    width: 100px;
    height: 120px;
    background: repeating-linear-gradient(90deg, transparent, transparent 10px, #e5dfcf 10px, #e5dfcf 20px);
    opacity: 0.15;
    clip-path: polygon(0 40%, 100% 0, 100% 100%, 0% 100%);
}

.card-bg-2 .graphic-vinyl {
    position: absolute;
    width: 200px;
    height: 200px;
    border: 12px double #f0c040;
    border-radius: 50%;
    right: -80px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.15;
}

.card-bg-3 .graphic-circle {
    width: 160px;
    height: 160px;
    background: #161616;
    bottom: -40px;
    left: -20px;
    opacity: 0.35;
}

.card-bg-4 .graphic-waves {
    position: absolute;
    width: 150px;
    height: 150px;
    border-radius: 40%;
    background: #2b3a3a;
    top: -40px;
    right: -40px;
    opacity: 0.15;
}

/* TYPOGRAPHY ARCHITECTURE */
.card-tag {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    font-weight: 700;
    opacity: 0.8;
    z-index: 2;
}

.card-bg-0 .card-tag, .card-bg-4 .card-tag { color: #b88a1c; }
.card-bg-1 .card-tag, .card-bg-3 .card-tag { color: #ebdcb9; }
.card-bg-2 .card-tag { color: #f0c040; }

.card-title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 1.8rem;
    line-height: 1.15;
    font-weight: 800; 
    text-transform: uppercase;
    margin-top: auto;
    margin-bottom: 12px;
    letter-spacing: -0.5px;
    z-index: 2;
}

.card-footer-meta {
    font-size: 0.75rem;
    font-weight: 700;
    opacity: 0.6;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    z-index: 2;
}

/* TIGHTENED 3D PERSPECTIVE DESKTOP VIEW STATES */
.card-main{
    width: 250px;
    height: 340px;
    z-index: 5;
    transform: translateX(0) translateZ(60px) scale(1);
    opacity: 1;
}

.card-main .card-title {
    transform: scale(1.03);
    transition: transform 0.3s ease;
}

.card-bg-2.card-main {
    border-color: rgba(240, 192, 64, 0.5);
}
.card-bg-2.card-main .card-title {
    color: #f0c040;
}

/* Desktop spaces reduced from 230px to 160px for a beautiful overlapping stack */
.card-left1{
    transform: translateX(-160px) rotateY(22deg) scale(0.85);
    z-index: 3;
    opacity: 0.85;
}

/* Desktop spaces reduced from 400px to 300px */
.card-left2{
    transform: translateX(-300px) rotateY(30deg) scale(0.7);
    z-index: 2;
    opacity: 0.4;
}

/* Desktop spaces reduced from 230px to 160px */
.card-right1{
    transform: translateX(160px) rotateY(-22deg) scale(0.85);
    z-index: 3;
    opacity: 0.85;
}

/* Desktop spaces reduced from 400px to 300px */
.card-right2{
    transform: translateX(300px) rotateY(-30deg) scale(0.7);
    z-index: 2;
    opacity: 0.4;
}

/* INTERACTION DOTS MODULE */
.dots{
    display: flex;
    gap: 12px;
    margin: 30px 0 25px;
    justify-content: center;
    align-items: center;
    z-index: 10;
}

.dot{
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
    cursor: pointer;
}

.dot.active{
    background: #f0c040;
    transform: scale(1.4);
    box-shadow: 0 0 10px rgba(240, 192, 64, 0.6);
}

/* CONTROLLER DECK */
.music-bar{
    width: 100%;
    max-width: 800px;
    height: 120px;
    background: rgba(15, 15, 15, 0.7);
    backdrop-filter: blur(25px);
    -webkit-backdrop-filter: blur(25px);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 12px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.05);
}

.music-bar iframe{
    border-radius: 8px;
    width: 100%;
    height: 100%;
}


/* RESPONSIVE LAYOUT MATRIX FOR MOBILE PHONES */
@media (max-width: 768px){

    body {
        padding-top: 100px;
    }

    .player-container{
        height: 340px;
    }

    .music-card{
        width: 180px;
        height: 250px;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
    }

    .card-main{
        opacity: 1;
        pointer-events: auto;
        transform: translateX(-50%) translateZ(30px) scale(1.1);
        z-index: 5;
    }

    .card-left1{
        opacity: 0.55;
        pointer-events: auto;
        transform: translateX(-145px) scale(0.85);
        z-index: 3;
    }

    .card-right1{
        opacity: 0.55;
        pointer-events: auto;
        transform: translateX(-35px) scale(0.85);
        z-index: 3;
    }

    .card-left2, .card-right2{
        opacity: 0;
        pointer-events: none;
        transform: translateX(-50%) scale(0.6);
    }

    .music-bar{
        width: 95%;
        height: 105px;
    }
}

@media (max-width: 480px){
    .player-container {
        height: 300px;
    }
    .music-card{
        width: 155px;
        height: 215px;
        padding: 18px;
    }
    .card-title {
        font-size: 1.3rem;
        margin-bottom: 6px;
    }
    .card-left1 {
        transform: translateX(-130px) scale(0.85);
    }
    .card-right1 {
        transform: translateX(-25px) scale(0.85);
    }
}

</style>
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="player-container">

    <div class="music-card card-bg-0" data-index="0">
        <div class="graphic-element graphic-circle"></div>
        <div class="card-tag">Mokima Sync</div>
        <div class="card-title">Happy Month of Love</div>
        <div class="card-footer-meta"><span>Valentine's playlist</span><span class="editorial-star">✦</span></div>
    </div>

    <div class="music-card card-bg-1" data-index="1">
        <div class="graphic-bars"></div>
        <div class="card-tag">Mokima Audio</div>
        <div class="card-title">Revolutionary Rhythms</div>
        <div class="card-footer-meta"><span>Curated Vol. 1</span><span class="editorial-star">✦</span></div>
    </div>

    <div class="music-card card-bg-2" data-index="2">
        <div class="graphic-vinyl"></div>
        <div class="card-tag">Mokima Catalog</div>
        <div class="card-title">SOULYANO</div>
        <div class="card-footer-meta"><span>Soulful Piano</span><span class="editorial-star">✦</span></div>
    </div>

    <div class="music-card card-bg-3" data-index="3">
        <div class="graphic-element graphic-circle"></div>
        <div class="card-tag">Mokima Audio</div>
        <div class="card-title">Queens of Music</div>
        <div class="card-footer-meta"><span>Happy Women's month</span><span class="editorial-star">✦</span></div>
    </div>

    <div class="music-card card-bg-4" data-index="4">
        <div class="graphic-element graphic-waves"></div>
        <div class="card-tag">Mokima Audio</div>
        <div class="card-title">Heartstrings & Harmonies</div>
        <div class="card-footer-meta"><span>Love songs</span><span class="editorial-star">✦</span></div>
    </div>

</div>

<div class="dots" id="dotsContainer"></div>

<div class="music-bar">
    <iframe id="spotifyPlayer"
        src="https://open.spotify.com/embed/playlist/6Gz97imVaIBfUHzDYYcAiC"
        frameBorder="0"
        allowfullscreen=""
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
    </iframe>
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
const dotsContainer = document.getElementById("dotsContainer");

let activeIndex = 2; 

function buildDots() {
    dotsContainer.innerHTML = "";
    playlists.forEach((_, i) => {
        const dot = document.createElement("div");
        dot.className = `dot ${i === activeIndex ? 'active' : ''}`;
        dot.addEventListener("click", () => loadPlaylist(i));
        dotsContainer.appendChild(dot);
    });
}

function updateCarousel(){
    const total = playlists.length;

    cards.forEach(card => {
        const index = parseInt(card.dataset.index);
        
        let offset = index - activeIndex;
        if (offset > total / 2) offset -= total;
        if (offset < -total / 2) offset += total;

        card.classList.remove("card-main", "card-left1", "card-left2", "card-right1", "card-right2");

        if (offset === 0) card.classList.add("card-main");
        else if (offset === -1) card.classList.add("card-left1");
        else if (offset === -2) card.classList.add("card-left2");
        else if (offset === 1) card.classList.add("card-right1");
        else if (offset === 2) card.classList.add("card-right2");
    });

    document.querySelectorAll(".dot").forEach((dot, i) => {
        dot.classList.toggle("active", i === activeIndex);
    });
}

function loadPlaylist(index){
    activeIndex = index;
    document.getElementById("spotifyPlayer").src = playlists[index];
    updateCarousel();
}

cards.forEach(card => {
    card.addEventListener("click", () => {
        loadPlaylist(parseInt(card.dataset.index));
    });
});

let startX = 0;
const container = document.querySelector(".player-container");

container.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
}, { passive: true });

container.addEventListener("touchend", (e) => {
    const endX = e.changedTouches[0].clientX;
    const diff = startX - endX;

    if (Math.abs(diff) < 50) return; 

    if (diff > 0) {
        activeIndex = (activeIndex + 1) % playlists.length;
    } else {
        activeIndex = (activeIndex - 1 + playlists.length) % playlists.length;
    }

    loadPlaylist(activeIndex);
}, { passive: true });

window.addEventListener("resize", updateCarousel);
buildDots();
updateCarousel();

</script>

</body>
</html>