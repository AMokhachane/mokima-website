<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Songwriters</title>

    <link rel="stylesheet" href="style.css"> <!-- if you create one later -->

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #eee9e9;
        }

        .page-container {
            padding-top: 90px; /* space for fixed navbar */
            text-align: center;
        }

        .page-container h1 {
            font-size: 2.8rem;
            margin-bottom: 10px;
        }

        .subheading {
            color: #f0c040;
            font-size: 1.2rem;
            letter-spacing: 2px;
            margin-bottom: 60px;
            text-transform: uppercase;
        }

        /* ===== ARTIST GRID ===== */
        .artist-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 50px;
            max-width: 1000px;
            margin: 0 auto 80px auto;
        }

        .artist-tile {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .artist-tile img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            transition: 0.3s ease;
        }

        .artist-tile img:hover {
            transform: scale(1.05);
        }

        .artist-name {
            margin-top: 15px;
            font-size: 1rem;
            font-weight: bold;
        }

        .view-more-container {
    margin-top: 40px;
}

.view-more-btn {
    display: inline-block;
    padding: 12px 30px;
    font-size: 0.95rem;
    text-decoration: none;
    color: #f0c040;
    border: 2px solid #f0c040;
    border-radius: 30px;
    transition: 0.3s ease;
    letter-spacing: 1px;
}

.view-more-btn:hover {
    background-color: #f0c040;
    color: white;
    transform: translateY(-3px);
}

    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="page-container">
    <h1>OUR SONGWRITERS</h1>
    <div class="subheading">Writers, Producers & Composers</div>

    <div class="artist-grid">

        <div class="artist-tile">
            <img src="assets/boohle.jpg" alt="Artist 1">
            <div class="artist-name">BOOHLE</div>
        </div>

        <div class="artist-tile">
            <img src="assets/sykes.png" alt="Artist 2">
            <div class="artist-name">SYKES</div>
        </div>

        <div class="artist-tile">
            <img src="assets/russell.jpg" alt="Artist 3">
            <div class="artist-name">Russell Zuma</div>
        </div>

        <div class="artist-tile">
            <img src="assets/khuzani.jpg" alt="Artist 4">
            <div class="artist-name">Khuzani</div>
        </div>

        <div class="artist-tile">
            <img src="assets/sir.jpg" alt="Artist 5">
            <div class="artist-name">Sir Trill</div>
        </div>

        <div class="artist-tile">
            <img src="assets/naledi.jpg" alt="Artist 6">
            <div class="artist-name">Naledi Aphiwe</div>
        </div>

        <div class="artist-tile">
            <img src="assets/vigro.jpg" alt="Artist 7">
            <div class="artist-name">Vigro Deep</div>
        </div>

        <div class="artist-tile">
            <img src="assets/kay.jpg" alt="Artist 8">
            <div class="artist-name">Prince Kaybee</div>
        </div>

    </div>

    <div class="view-more-container">
    <a href="all-artists.php" class="view-more-btn">View More</a>
</div>


</div>

</body>
</html>
