<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Songwriters</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="oursongwriters.css">  
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="page-container">

    <!-- ================= TOP 70% SECTION ================= -->
    <div class="top-section">

        <h1>OUR SONGWRITERS</h1>
        <div class="subheading">Writers, Producers & Composers</div>

        <!-- ================= TOP SLIDER ================= -->

        <div class="artists-carousel">
            <div class="carousel-track" id="carouselTrack">

                <div class="artist-tile">
                    <img src="assets/boohle.jpg">
                    <div class="tile-name">BOOHLE</div>
                </div>

                <div class="artist-tile">
                    <img src="assets/sykes.jpeg">
                    <div class="tile-name">SYKES</div>
                </div>

                <div class="artist-tile">
                    <img src="assets/russell.jpg">
                    <div class="tile-name">RUSSELL ZUMA</div>
                </div>

                <div class="artist-tile">
                    <img src="assets/khuzani.jpg">
                    <div class="tile-name">KHUZANI</div>
                </div>

                <div class="artist-tile">
                    <img src="assets/sir.jpg">
                    <div class="tile-name">SIR TRILL</div>
                </div>

                <div class="artist-tile">
                    <img src="assets/naledi.jpg">
                    <div class="tile-name">NALEDI APHIWE</div>
                </div>

                <div class="artist-tile">
                    <img src="assets/vigro.jpg">
                    <div class="tile-name">VIGRO DEEP</div>
                </div>

                <div class="artist-tile">
                    <img src="assets/kay.jpg">
                    <div class="tile-name">PRINCE KAYBEE</div>
                </div>

                <!-- duplicates for smooth loop -->
                <div class="artist-tile">
                    <img src="assets/boohle.jpg">
                    <div class="tile-name">BOOHLE</div>
                </div>

                <div class="artist-tile">
                    <img src="assets/sykes.png">
                    <div class="tile-name">SYKES</div>
                </div>

                <div class="artist-tile">
                    <img src="assets/russell.jpg">
                    <div class="tile-name">RUSSELL ZUMA</div>
                </div>

            </div>
        </div>

    </div>
    <!-- ================= BOTTOM 30% SERVICES ================= -->

    <div class="services">

        <div class="service-box">
            <i class="fas fa-users"></i>
            <h3>EXPERTISE AND EXPERIENCE</h3>
            <p>
                Mokima is reliable in music publishing and a trusted partner in 
                music rights management. We provide professional support in 
                sync licensing, copyright administration, A&R development, 
                and long-term career strategy.
            </p>
        </div>

        <div class="service-box">
            <i class="fas fa-globe"></i>
            <h3>GLOBAL REACH</h3>
            <p>
                Mokima is headquartered in South Africa and works with industry 
                partners, streaming platforms, and international networks to 
                ensure our artists' music reaches audiences across the world.
            </p>
        </div>

        <div class="service-box">
            <i class="fas fa-headphones"></i>
            <h3>MUSIC RIGHTS MANAGEMENT</h3>
            <p>
                Our music rights management services ensure efficient 
                administration of catalogues, safeguarding copyrights and 
                maximizing revenue streams for all of our stakeholders.
            </p>
        </div>

    </div>
    <!-- ================= END SERVICES ================= -->

</div>


<script>
    const track = document.getElementById("carouselTrack");
    const visibleTiles = 3;
    let index = 0;

    setInterval(() => {
        index++;
        track.style.transform = `translateX(-${index * (100 / visibleTiles)}%)`;

        if (index >= track.children.length - visibleTiles) {
            setTimeout(() => {
                track.style.transition = "none";
                track.style.transform = "translateX(0)";
                index = 0;

                setTimeout(() => {
                    track.style.transition = "transform 0.8s ease-in-out";
                }, 50);

            }, 800);
        }

    }, 4000);
</script>

</body>
</html>
