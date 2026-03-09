<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Mokima Playlists</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* RESET */

*{
box-sizing:border-box;
font-family:"Segoe UI",Tahoma,Geneva,Verdana,sans-serif;
}

body{
margin:0;
height:100vh;
background:#e6e6e6;
overflow:hidden;
}

/* PAGE */

.page-container{
height:100vh;
padding:110px 40px 40px;
display:flex;
flex-direction:column;
align-items:center;
}

/* TITLE */

h1{
margin:0;
font-size:28px;
color:#111;
}

.subheading{
font-size:13px;
color:#666;
letter-spacing:2px;
margin-top:6px;
margin-bottom:30px;
text-transform:uppercase;
}

/* GRID LAYOUT */

.playlist-grid{

width:100%;
max-width:1200px;
height:70vh;

display:grid;
grid-template-columns:repeat(6,1fr);
grid-auto-rows:1fr;
gap:18px;

}

/* GRID POSITIONS */

.playlist-card:nth-child(1){grid-column:span 3;}
.playlist-card:nth-child(2){grid-column:span 3;}

.playlist-card:nth-child(3){grid-column:span 2;}
.playlist-card:nth-child(4){grid-column:span 2;}
.playlist-card:nth-child(5){grid-column:span 2;}

/* CARD */

.playlist-card{

position:relative;
border-radius:16px;
overflow:hidden;
background:#000;
cursor:pointer;

box-shadow:0 6px 14px rgba(0,0,0,0.2);

}

.playlist-card img{

width:100%;
height:100%;
object-fit:cover;
transition:transform .4s;

}

.playlist-card:hover img{
transform:scale(1.1);
}

/* OVERLAY */

.overlay{

position:absolute;
bottom:0;
left:0;
width:100%;
height:100%;

background:linear-gradient(transparent,rgba(0,0,0,.9));

padding:20px;
display:flex;
flex-direction:column;
justify-content:flex-end;
color:white;

}

/* TITLE */

.overlay h3{
margin:0;
color:#f0c040;
font-size:20px;
}

/* DESCRIPTION */

.overlay p{
margin:4px 0 12px;
font-size:13px;
color:#ddd;
}

/* SONG LIST */

.song-list{

list-style:none;
padding:0;
margin:0;

opacity:0;
transform:translateY(10px);
transition:.3s;

font-size:12px;

}

.playlist-card:hover .song-list{
opacity:1;
transform:translateY(0);
}

.song-list li{
margin:3px 0;
}

/* SPOTIFY */

.spotify{

position:absolute;
top:15px;
right:15px;
font-size:26px;
color:#1DB954;

}

.spotify:hover{
transform:scale(1.2);
}

</style>
</head>


<body>

<?php include 'navbar.php'; ?>

<div class="page-container">

<h1>MOKIMA PLAYLISTS</h1>
<div class="subheading">Curated Spotify Playlists from Our Catalog</div>

<div class="playlist-grid">


<!-- PLAYLIST 1 -->

<div class="playlist-card">

<img src="assets/d.jpg">

<a class="spotify" href="https://open.spotify.com/playlist/6Gz97imVaIBfUHzDYYcAiC?si=_T5iJds0Q72p2PWcM3Uh-A" target="_blank">
<i class="fab fa-spotify"></i>
</a>

<div class="overlay">

<h3>SoulYano</h3>
<p>Lost in the rhythm, found in the soul.</p>

<ul class="song-list">
<li>Song Example 1</li>
<li>Song Example 2</li>
<li>Song Example 3</li>
<li>Song Example 4</li>
<li>Song Example 5</li>
</ul>

</div>

</div>


<!-- PLAYLIST 2 -->

<div class="playlist-card">

<img src="assets/d.jpg">

<a class="spotify" href="https://open.spotify.com/playlist/0gxT6zTw8BJiCWDZgiijHz?si=LtpGa53cQ0WPKXkB7qz6oA" target="_blank">
<i class="fab fa-spotify"></i>
</a>

<div class="overlay">

<h3>Happy Month of Love</h3>
<p>Happy month of love music lover.</p>

<ul class="song-list">
<li>Love Song 1</li>
<li>Love Song 2</li>
<li>Love Song 3</li>
<li>Love Song 4</li>
<li>Love Song 5</li>
</ul>

</div>

</div>


<!-- PLAYLIST 3 -->

<div class="playlist-card">

<img src="assets/d.jpg">

<a class="spotify" href="https://open.spotify.com/playlist/6BB7hYaIWMdChARKgzKa4Q?si=wfNKvBlpTJmDDNghuTyWBA" target="_blank">
<i class="fab fa-spotify"></i>
</a>

<div class="overlay">

<h3>Revolutionary Rhythms</h3>
<p>Marching to the beat of change.</p>

<ul class="song-list">
<li>Freedom Song</li>
<li>Rise Up</li>
<li>Unity</li>
<li>Change is Now</li>
<li>Revolution Beat</li>
</ul>

</div>

</div>


<!-- PLAYLIST 4 -->

<div class="playlist-card">

<img src="assets/d.jpg">

<a class="spotify" href="https://open.spotify.com/playlist/6HCqaZMBjbc7elOhOhJfL6?si=aiIGCMdySwOBYATe04Grrw" target="_blank">
<i class="fab fa-spotify"></i>
</a>

<div class="overlay">

<h3>Queen's of Music</h3>
<p>Celebrating powerful female voices.</p>

<ul class="song-list">
<li>Queen Anthem</li>
<li>She Rises</li>
<li>Voice of Power</li>
<li>Women Unite</li>
<li>Golden Voice</li>
</ul>

</div>

</div>


<!-- PLAYLIST 5 -->

<div class="playlist-card">

<img src="assets/d.jpg">

<a class="spotify" href="https://open.spotify.com/playlist/555LAwb29kYJPFOuqhb51F?si=_Y9PomQyRHSfA-KdLU5Bag" target="_blank">
<i class="fab fa-spotify"></i>
</a>

<div class="overlay">

<h3>Heartstrings & Harmonies</h3>
<p>Setting the mood for love.</p>

<ul class="song-list">
<li>Slow Dance</li>
<li>Forever Love</li>
<li>Heartbeat</li>
<li>Midnight Kiss</li>
<li>Sweet Harmony</li>
</ul>

</div>

</div>


</div>
</div>

</body>
</html>