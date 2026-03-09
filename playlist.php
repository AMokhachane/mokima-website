<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mokima Playlists</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* RESET */
* { box-sizing:border-box; font-family:"Segoe UI",Tahoma,Geneva,Verdana,sans-serif; }
body { margin:0; background:#f0f0f0; padding:120px 20px 40px; }

/* TITLE */
h1 { font-size:28px; color:#111; margin-bottom:5px; text-align:center; }
.subheading { font-size:13px; color:#666; letter-spacing:2px; margin-bottom:30px; text-transform:uppercase; text-align:center; }

/* GRID */
.playlist-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-auto-rows: auto;
  gap: 20px;
  max-width:1200px;
  margin:0 auto;
}

/* Place cards 1-2 on top, 3-5 on bottom */
.playlist-card:nth-child(1) { grid-column: 1 / 2; grid-row: 1; }
.playlist-card:nth-child(2) { grid-column: 2 / 3; grid-row: 1; }
.playlist-card:nth-child(3) { grid-column: 1 / 2; grid-row: 2; }
.playlist-card:nth-child(4) { grid-column: 2 / 3; grid-row: 2; }
.playlist-card:nth-child(5) { grid-column: 3 / 4; grid-row: 2; }

/* CARD */
.playlist-card {
  background:#fff;
  border-radius:14px;
  overflow:hidden;
  box-shadow:0 4px 12px rgba(0,0,0,0.15);
  transition:transform 0.2s, box-shadow 0.2s;
  display:flex;
  flex-direction:column;
  position:relative;
}
.playlist-card:hover { transform:translateY(-4px); box-shadow:0 8px 20px rgba(0,0,0,0.2); }

/* IMAGE */
.playlist-card img { width:100%; height:160px; object-fit:cover; }

/* INFO */
.card-info { padding:12px 16px; flex:1; display:flex; flex-direction:column; }
.card-info h3 { margin:0; font-size:17px; color:#f0c040; }
.card-info p { margin:4px 0 6px; font-size:13px; color:#555; }

/* SONG LIST */
.song-list { list-style:none; padding:0; margin:4px 0 0; max-height:0; overflow:hidden; transition:max-height 0.3s ease; font-size:12px; color:#333; }
.playlist-card:hover .song-list { max-height:120px; }
.song-list li { margin:2px 0; }

/* SPOTIFY ICON */
.spotify { position:absolute; bottom:12px; right:12px; font-size:24px; color:#1DB954; transition:transform 0.2s; }
.spotify:hover { transform:scale(1.2); }

/* RESPONSIVE */
@media(max-width:900px){
  .playlist-grid { grid-template-columns:1fr; gap:16px; }
  .playlist-card:nth-child(1),
  .playlist-card:nth-child(2),
  .playlist-card:nth-child(3),
  .playlist-card:nth-child(4),
  .playlist-card:nth-child(5) { grid-column:auto; grid-row:auto; }
}
</style>
</head>

<body>
<?php include 'navbar.php'; ?>

<h1>MOKIMA PLAYLISTS</h1>
<div class="subheading">Curated Spotify Playlists from Our Catalog</div>

<div class="playlist-grid">

<!-- Playlist 1 -->
<div class="playlist-card">
<img src="assets/d.jpg" alt="SoulYano Cover">
<div class="card-info">
<h3>SoulYano</h3>
<p>Lost in the rhythm, found in the soul.</p>
<ul class="song-list">
<li>Song 1</li>
<li>Song 2</li>
<li>Song 3</li>
<li>Song 4</li>
<li>Song 5</li>
</ul>
</div>
<a class="spotify" href="#" target="_blank"><i class="fab fa-spotify"></i></a>
</div>

<!-- Playlist 2 -->
<div class="playlist-card">
<img src="assets/d.jpg" alt="Happy Month Cover">
<div class="card-info">
<h3>Happy Month of Love</h3>
<p>Happy month of love music lover.</p>
<ul class="song-list">
<li>Song 1</li>
<li>Song 2</li>
<li>Song 3</li>
<li>Song 4</li>
<li>Song 5</li>
</ul>
</div>
<a class="spotify" href="#" target="_blank"><i class="fab fa-spotify"></i></a>
</div>

<!-- Playlist 3 -->
<div class="playlist-card">
<img src="assets/d.jpg" alt="Revolutionary Rhythms">
<div class="card-info">
<h3>Revolutionary Rhythms</h3>
<p>Marching to the beat of change.</p>
<ul class="song-list">
<li>Song 1</li>
<li>Song 2</li>
<li>Song 3</li>
<li>Song 4</li>
<li>Song 5</li>
</ul>
</div>
<a class="spotify" href="#" target="_blank"><i class="fab fa-spotify"></i></a>
</div>

<!-- Playlist 4 -->
<div class="playlist-card">
<img src="assets/d.jpg" alt="Queens of Music">
<div class="card-info">
<h3>Queen's of Music</h3>
<p>Celebrating powerful female voices.</p>
<ul class="song-list">
<li>Song 1</li>
<li>Song 2</li>
<li>Song 3</li>
<li>Song 4</li>
<li>Song 5</li>
</ul>
</div>
<a class="spotify" href="#" target="_blank"><i class="fab fa-spotify"></i></a>
</div>

<!-- Playlist 5 -->
<div class="playlist-card">
<img src="assets/d.jpg" alt="Heartstrings Cover">
<div class="card-info">
<h3>Heartstrings & Harmonies</h3>
<p>Setting the mood for love.</p>
<ul class="song-list">
<li>Song 1</li>
<li>Song 2</li>
<li>Song 3</li>
<li>Song 4</li>
<li>Song 5</li>
</ul>
</div>
<a class="spotify" href="#" target="_blank"><i class="fab fa-spotify"></i></a>
</div>

</div>

</body>
</html>