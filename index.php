<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mokima Publishing</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* BASE */
        * {
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }

        /* NAVBAR already included from navbar.php */

        /* VIDEO BACKGROUND */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
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
            background: rgba(0, 0, 0, 0.45); /* slightly darker for contrast */
            z-index: 0;
        }

        /* CENTERED CONTENT */
        .content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 0 20px;
        }

        .content h1 {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #fff;
            line-height: 1.2;
            max-width: 900px;
        }

        .content p {
            font-size: 1.2rem;
            color: #ddd;
            margin-bottom: 40px;
            max-width: 700px;
        }

        .scroll-hint a {
            font-size: 2rem;
            color: #405af0; /* Mokima accent color */
            text-decoration: none;
            animation: bounce 1.5s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(15px); }
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .content h1 {
                font-size: 2rem;
            }
            .content p {
                font-size: 1rem;
            }
            .scroll-hint a {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- VIDEO BACKGROUND -->
<div class="video-background">
    <iframe
        src="https://www.youtube.com/embed/txCX3DeLkMQ?autoplay=1&mute=1&controls=0&loop=1&playlist=txCX3DeLkMQ&modestbranding=1&showinfo=0&start=6"
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