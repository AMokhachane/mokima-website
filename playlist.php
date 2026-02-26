<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mokima Playlists</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

/* NAVBAR */
nav {
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
    background: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav a {
    text-decoration: none;
    color: #111;
    margin: 0 15px;
    font-weight: 600;
    transition: color 0.2s;
}
nav a:hover {
    color: #381ab0;
}

/* PAGE CONTAINER */
.page-container {
    height: 100vh; /* fill one screen */
    padding: 120px 20px 20px; /* smaller top padding */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
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

/* TWO COLUMN LAYOUT */
.playlist-layout {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 30px;
    width: 100%;
    max-width: 1100px;
    flex: 1;
    overflow: hidden; /* prevent overflow */
}

/* LEFT COLUMN - ICON */
.playlist-left {
    flex: 0 0 45%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.playlist-left img {
    max-width: 90%;
    max-height: 80vh;
    object-fit: contain;
}

/* RIGHT COLUMN - PLAYLIST LIST */
.playlist-right {
    flex: 0 0 50%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* align top */
    height: 100%;
    overflow: hidden;
    gap: 12px; /* reduced spacing between items */
}

.playlist-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 18px 22px; /* slightly bigger */
    border-radius: 14px; /* slightly bigger radius */
    box-shadow: 0 3px 8px rgba(0,0,0,0.12); /* slightly stronger shadow */
    transition: transform 0.2s;
    font-size: 0.88rem; /* slightly bigger font */
}

.playlist-item:hover {
    transform: translateY(-2px);
}

.playlist-info h3 {
    margin: 0 0 4px 0;
    color: #f0c040;
    font-size: 17px; /* slightly bigger */
}

.playlist-info p {
    margin: 0;
    color: #666;
    font-size: 14px; /* slightly bigger */
}

.playlist-link a {
    font-size: 22px; /* slightly bigger Spotify icon */
}
.playlist-link a:hover {
    transform: scale(1.2);
}

/* RESPONSIVE */
@media (max-width: 900px) {
    .playlist-layout {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }
    .playlist-left {
        margin-bottom: 20px;
    }
    .playlist-left img {
        max-width: 70%;
        max-height: 40vh;
    }
    .playlist-right {
        width: 100%;
    }
    .playlist-item {
        padding: 30px 15px;
        font-size: 0.8rem;
    }
    .playlist-info h3 {
        font-size: 15px;
    }
    .playlist-info p {
        font-size: 12px;
    }
    .playlist-link a {
        font-size: 18px;
    }
}
</style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="page-container">
    <h1>MOKIMA PLAYLISTS</h1>
    <div class="subheading">Curated Spotify Playlists from Our Catalog</div>

    <div class="playlist-layout">
        <!-- LEFT: IMAGE -->
        <div class="playlist-left">
            <img src="assets/pip.png" alt="Listening cartoon">
        </div>

        <!-- RIGHT: PLAYLIST LIST -->
        <div class="playlist-right">
            <div class="playlist-item">
                <div class="playlist-info">
                    <h3>SoulYano</h3>
                    <p>Lost in the rhythm, found in the soul.</p>
                </div>
                <div class="playlist-link">
                    <a href="https://open.spotify.com/playlist/6Gz97imVaIBfUHzDYYcAiC?si=_T5iJds0Q72p2PWcM3Uh-A" target="_blank">
                        <i class="fab fa-spotify"></i>
                    </a>
                </div>
            </div>

            <div class="playlist-item">
                <div class="playlist-info">
                    <h3>Happy Month of Love</h3>
                    <p>Happy month of love music lover.</p>
                </div>
                <div class="playlist-link">
                    <a href="https://open.spotify.com/playlist/0gxT6zTw8BJiCWDZgiijHz?si=LtpGa53cQ0WPKXkB7qz6oA" target="_blank">
                        <i class="fab fa-spotify"></i>
                    </a>
                </div>
            </div>

            <div class="playlist-item">
                <div class="playlist-info">
                    <h3>Revolutionary Rhythms</h3>
                    <p>Marching to the beat of Change!</p>
                </div>
                <div class="playlist-link">
                    <a href="https://open.spotify.com/playlist/6BB7hYaIWMdChARKgzKa4Q?si=wfNKvBlpTJmDDNghuTyWBA" target="_blank">
                        <i class="fab fa-spotify"></i>
                    </a>
                </div>
            </div>

            <div class="playlist-item">
                <div class="playlist-info">
                    <h3>Queen's of Music</h3>
                    <p>Celebrate Women's Month with powerful inspiring voices of women in music.</p>
                </div>
                <div class="playlist-link">
                    <a href="https://open.spotify.com/playlist/6HCqaZMBjbc7elOhOhJfL6?si=aiIGCMdySwOBYATe04Grrw" target="_blank">
                        <i class="fab fa-spotify"></i>
                    </a>
                </div>
            </div>

            <div class="playlist-item">
                <div class="playlist-info">
                    <h3>Heartstrings & Harmonies</h3>
                    <p>Setting the mood for love and nostalgia.</p>
                </div>
                <div class="playlist-link">
                    <a href="https://open.spotify.com/playlist/555LAwb29kYJPFOuqhb51F?si=_Y9PomQyRHSfA-KdLU5Bag" target="_blank">
                        <i class="fab fa-spotify"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>