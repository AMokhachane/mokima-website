<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mokima Publishing</title>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        /* ===== VIDEO BACKGROUND ===== */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .video-background iframe {
            width: 100vw;
            height: 100vh;
            pointer-events: none;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.35);
            z-index: 0;
        }

        /* ===== CENTER CONTENT ===== */
        .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            font-size: 3rem;
            top: 45%;
        }

        .content h1 {
    font-size: 3rem;
    margin-bottom: 20px;
    color: white;
}

.content p {
    font-size: 1.2rem;
    color: #f0f0f0;
}

.scroll-hint a {
    font-size: 2rem;
    color: white;
    text-decoration: none;
    animation: bounce 1.5s infinite;
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(15px); }
}

    </style>
</head>

    <!-- VIDEO BACKGROUND -->
    <div class="video-background">
        <iframe
            src="https://www.youtube.com/embed/hRr2UP8U1PE?autoplay=1&mute=1&controls=0&loop=1&playlist=hRr2UP8U1PE&modestbranding=1&showinfo=0"
            frameborder="0"
            allow="autoplay; fullscreen">
        </iframe>
    </div>

    <div class="overlay"></div>

    <!-- MAIN CONTENT -->
    <div class="content">
    <h1>Where Music Finds Its Voice</h1>
    <p>Publishing. Licensing. Artist Development.</p>
    <div class="scroll-hint">
    <a href="songwriters.php">&#x2193;</a>
</div>
</div>

</body>
</html>
