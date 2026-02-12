<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Songwriters</title>

    <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #eee9e9;
        }

        .page-container {
            padding-top: 90px;
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

        /* ===== Artist Section ===== */

        .artist-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1300px;
            margin: 0 auto 80px;
            gap: 60px;
            text-align: left;
        }

        .artist-text {
            flex: 1;
        }

        .artist-text h2 {
            color: #f0c040;
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .artist-text p {
            font-size: 1rem;
            line-height: 1.8;
            color: #333;
        }

        /* Slider */

        .artist-slider {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .slider-wrapper {
            position: relative;
            width: 450px;
            height: 500px;
        }

        .slider-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            transition: opacity 0.6s ease-in-out;
        }

        .artist-bar {
            position: absolute;
            bottom: 0;
            width: 50%;
            padding: 20px 0;
            background: #f0c040;
            color: #fff;
            font-weight: bold;
            letter-spacing: 1px;
            text-align: center;
            border-bottom-left-radius: 20px;
            border-top-right-radius: 60px;
            transition: opacity 0.6s ease-in-out;
        }

        /* Button */
        .view-more-btn {
            display: inline-block;
            padding: 12px 30px;
            font-size: 0.95rem;
            text-decoration: none;
            color: #f0c040;
            border: 2px solid #f0c040;
            border-radius: 30px;
            letter-spacing: 1px;
            transition: 0.3s ease;
        }

        .view-more-btn:hover {
            background: #f0c040;
            color: #fff;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="page-container">
    <h1>OUR SONGWRITERS</h1>
    <div class="subheading">Writers, Producers & Composers</div>

    <div class="artist-section">
        <div class="artist-text">
            <h2>MAXIMIZE YOUR IMPACT.</h2>

          <p>
            Mokima Publishing is home to talented artists such as Prince Kaybee, Sykes, 
            Boohle, Russell Zuma, Khuzani, Sir Trill, and Naledi Aphiwe, each with a strong 
            catalogue of music and a proven presence in the industry.
          </p>

          <p>
            We support our artists at every stage of their careers, offering a hands-on, 
            artist-first approach. From release planning to strategic marketing, 
            our goal is to help you maximize your reach, grow your audience, and make a 
            lasting impact with your music.
          </p>
        </div>

        <div class="artist-slider">
            <div class="slider-wrapper">
                <img id="sliderImage" src="assets/boohle.jpg" alt="Artist">
                <div class="artist-bar" id="artistName">BOOHLE</div>
            </div>
        </div>
    </div>

    <div class="view-more-container">
        <a href="all-artists.php" class="view-more-btn">View More</a>
    </div>
</div>

<script>
    const artists = [
        { name: "BOOHLE", image: "assets/boohle.jpg" },
        { name: "SYKES", image: "assets/sykes.png" },
        { name: "Russell Zuma", image: "assets/russell.jpg" },
        { name: "Khuzani", image: "assets/khuzani.jpg" },
        { name: "Sir Trill", image: "assets/sir.jpg" },
        { name: "Naledi Aphiwe", image: "assets/naledi.jpg" },
        { name: "Vigro Deep", image: "assets/vigro.jpg" },
        { name: "Prince Kaybee", image: "assets/kay.jpg" }
    ];

    let currentIndex = 0;

    const sliderImage = document.getElementById("sliderImage");
    const artistName = document.getElementById("artistName");

    setInterval(() => {
        currentIndex = (currentIndex + 1) % artists.length;

        sliderImage.style.opacity = 0;
        artistName.style.opacity = 0;

        setTimeout(() => {
            sliderImage.src = artists[currentIndex].image;
            artistName.textContent = artists[currentIndex].name;
            sliderImage.style.opacity = 1;
            artistName.style.opacity = 1;
        }, 300);

    }, 4000);
</script>

</body>
</html>