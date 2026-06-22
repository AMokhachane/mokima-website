<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Our Services</title>

<!-- Google Fonts for Premium Editorial Typography -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

/* RESET & BASE */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#e9e9e6; /* Soft, upscale warm light gray background matching the reference site */
    min-height:100vh;
    overflow-x:hidden;
    font-family: 'Plus Jakarta Sans', sans-serif;
}

/* PAGE CONTAINER */
.page-container{
    min-height:100vh;
    padding:140px 20px 80px;
    display:flex;
    flex-direction:column;
    align-items:center;
}

/* INTRO TEXT SECTION */
.intro-container {
    max-width: 1200px;
    width: 90%;
    text-align: center;
    background: #fff;
    padding: 45px 35px;
    border-radius: 4px; /* Sharper, modern edges replace rounder corners for a luxury feel */
    box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    margin-bottom: 40px;
    border-top: 4px solid #f0c040;
}

h1{
    font-family: 'Cormorant Garamond', serif;
    font-size: 3.5rem;
    font-weight: 700;
    color: #111;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.subheading{
    font-size: 0.9rem;
    color: #777;
    letter-spacing: 4px;
    text-transform: uppercase;
    margin-bottom: 25px;
}

.intro-text {
    color: #444;
    font-size: 1.05rem;
    line-height: 1.8;
    max-width: 900px;
    margin: 0 auto;
}

.extended-text {
    display: none;
    margin-top: 15px;
}

.view-more-btn {
    display: inline-block;
    margin-top: 20px;
    color: #cfa22b;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 2px;
    cursor: pointer;
    transition: color 0.2s;
}

.view-more-btn:hover {
    color: #111;
}

/* MAIN STRUCTURAL SPLIT WRAPPER */
.services-wrapper{
    width:90%;
    max-width:1200px;
    display:flex;
    gap:40px;
    align-items: flex-start;
}

/* LEFT PANEL: BOLD, HIGH-CONTRAST SIDEBAR MENU */
.service-menu{
    flex: 1;
    background: #111; /* Solid black container matching image_80e67f.png */
    border-radius: 4px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.menu-header-block {
    background: #e1dec9; /* Distinct complementary contrasting tone for top header header bar */
    padding: 22px 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.menu-header-block h3 {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.4rem;
    font-weight: 700;
    color: #111;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.menu-icon-decorative {
    color: #111;
    font-size: 1.1rem;
}

.service-item-list {
    padding: 15px 0;
}

.service-item{
    padding: 18px 25px;
    cursor: pointer;
    font-weight: 500;
    font-size: 0.9rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    background: transparent;
    color: #bbb;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all .3s ease;
    border-bottom: 1px solid #1a1a1a;
}

/* Clean '+' toggle indicator symbol style */
.service-item::before {
    content: "+";
    color: #f0c040;
    font-weight: 600;
    font-size: 1.1rem;
    transition: transform 0.3s ease;
}

.service-item:hover{
    color: #fff;
    background: #161616;
    padding-left: 30px;
}

.service-item.active{
    background: #1a1a1a;
    color: #f0c040; /* Custom golden yellow brand accent */
    font-weight: 700;
}

.service-item.active::before {
    content: "—"; /* Flips to active dynamic dash indicator */
    color: #f0c040;
}

/* RIGHT PANEL: EDITORIAL, PREMIUM DETAIL VIEW */
.service-details{
    flex: 2;
    background: #fff;
    border-radius: 4px;
    padding: 60px;
    min-height: 520px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.04);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.details-header-layout {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
}

.editorial-star {
    font-size: 2rem;
    color: #111;
}

.service-details h2{
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.8rem;
    font-weight: 500;
    color: #111;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* New punchy, bold sub-hook statement formatting style */
.service-sub-hook {
    font-size: 1.25rem;
    font-weight: 700;
    color: #111;
    line-height: 1.5;
    margin-bottom: 20px;
}

.service-details p{
    color: #555;
    line-height: 1.9;
    font-size: 1.05rem;
    margin-bottom: 40px;
}

.service-cta-btn {
    align-self: flex-start;
    background: #111;
    color: #fff;
    padding: 14px 32px;
    border-radius: 2px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: all 0.3s ease;
}

.service-cta-btn:hover {
    background: #f0c040;
    color: #111;
}

/* FOOTER */
.contact-footer{
    margin-top: 80px;
    text-align: center;
    color: #777;
    font-size: .85rem;
    letter-spacing: 1px;
}

/* REFRESH VIEW ANIMATION */
.fade-in{
    animation: fadeIn .4s cubic-bezier(0.25, 1, 0.5, 1);
}

@keyframes fadeIn{
    from{
        opacity: 0;
        transform: translateY(15px);
    }
    to{
        opacity: 1;
        transform: translateY(0);
    }
}

/* TABLETS & PHONES RESPONSIVENESS */
@media(max-width:950px){
    .services-wrapper{
        flex-direction: column;
        width: 95%;
    }
    .service-menu {
        width: 100%;
    }
    .service-details {
        padding: 40px 30px;
    }
    h1 {
        font-size: 2.8rem;
    }
    .service-details h2 {
        font-size: 2.2rem;
    }
}

</style>
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="page-container">

    <!-- INTRO PANEL WITH INTEGRATED ACCORDION -->
    <div class="intro-container">
        <h1>OUR SERVICES</h1>
        <div class="subheading">
            Publishing, Rights & Royalty Management
        </div>
        
        <div class="intro-text">
            <p>
                We are a South African based independent music publisher, established in 2002. 
                We work with composers, authors and publishers to assist in the administration of their musical works. 
                We offer administration deal to all our clients. This type of deal or arrangement, the songwriter 
                does not assign any of their publishing or ownership rights in their compositions to a music publisher 
                or any other third party. Instead, the writer retains these rights and merely contracts with the 
                third-party for them to act as their “administrator” for a specified time period.
            </p>
            
            <div id="moreText" class="extended-text">
                <p style="margin-top: 15px;">
                    Essentially, the administrator handles all the paperwork related to the licensing and monetization 
                    of the song in exchange for a specific fee or percentage of earnings. This fee is referred to as 
                    an “administration fee” and is usually 5-25% of the income generated from the musical compositions. 
                    However, in certain instances, the administration fee could be more or less, depending on the extent 
                    of services provided by the third-party to the songwriter. Mokima Publishing has invested in a proper 
                    royalty system called Curve to ensure that works are shipped with the correct information (ISRC, 
                    co-composers, percentage split etc.) to the Collective Management Organisations. Curve system also 
                    manages royalty payment to the rightsholders. The mobile app is available for all our clients. Mokima 
                    Publishing is the new age Publisher that works with different music creators that wish for us to assist 
                    in the Administration of their works.
                </p>
            </div>
            
            <span id="viewMoreBtn" class="view-more-btn" onclick="toggleIntroText()">View More</span>
        </div>
    </div>


    <!-- SPLIT WINDOW INTERACTION MODULE -->
    <div class="services-wrapper">

        <!-- LEFT COLUMN SIDEBAR LIST MENU (Flipped & Upgraded) -->
        <div class="service-menu">
            <div class="menu-header-block">
                <h3>Our Services</h3>
                <span class="menu-icon-decorative">✦</span>
            </div>

            <div class="service-item-list">
                <div class="service-item active" onclick="showService(0)">Maximising Royalties</div>
                <div class="service-item" onclick="showService(1)">Rights Management</div>
                <div class="service-item" onclick="showService(2)">Licensing & Sync</div>
                <div class="service-item" onclick="showService(3)">Transparent Reporting</div>
                <div class="service-item" onclick="showService(4)">Personalised Support</div>
            </div>
        </div>

        <!-- RIGHT COLUMN CONTENT DETAILS CONTAINER -->
        <div class="service-details" id="serviceDetails">
            <div class="fade-in-target">
                <div class="details-header-layout">
                    <!-- Premium graphic geometric star replaces traditional web emojis -->
                    <span class="editorial-star">✦</span>
                    <h2 id="serviceTitle">Maximising Royalties</h2>
                </div>
                
                <!-- Added compelling bold editorial sub-hook placeholder layout -->
                <div class="service-sub-hook" id="serviceHook">
                    Every cent you are rightfully owed. Tracked, collected, and optimized globally.
                </div>
                
                <p id="serviceText">
                    We ensure you receive every cent owed by tracking, collecting, monitoring and optimising your royalty streams across all platforms, territories and collection societies worldwide. Our team works tirelessly to make sure your music generates the income it deserves.
                </p>
            </div>
            <a href="contact.php" class="service-cta-btn">Enquire About This Service</a>
        </div>

    </div>

    <footer class="contact-footer">
        <p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>
    </footer>

</div>

<script>

// TOGGLE VIEW MORE PANEL ACTION
function toggleIntroText() {
    const moreText = document.getElementById("moreText");
    const btnText = document.getElementById("viewMoreBtn");

    if (moreText.style.display === "block") {
        moreText.style.display = "none";
        btnText.innerHTML = "View More";
    } else {
        moreText.style.display = "block";
        btnText.innerHTML = "View Less";
    }
}

// UPGRADED DATA BANK INTEGRATING CLEAN ICON CODES & GRACEFUL HOOK COPIES
const services = [
{
    title: "Maximising Royalties",
    hook: "Every cent you are rightfully owed. Tracked, collected, and optimized globally.",
    text: "We ensure you receive every cent owed by tracking, collecting, monitoring and optimising your royalty streams across all platforms, territories and collection societies worldwide. Our team works tirelessly to make sure your music generates the income it deserves."
},
{
    title: "Rights Management",
    hook: "Your intellectual property. Fully registered, administered, and protected.",
    text: "We manage your publishing rights and intellectual property, ensuring your works are properly registered, protected and administered globally."
},
{
    title: "Licensing & Sync",
    hook: "Your music on screens worldwide. Opening doors to global dynamic revenue streams.",
    text: "We actively seek placement opportunities for your music in film, television, advertising, gaming and digital media to create additional revenue streams."
},
{
    title: "Transparent Reporting",
    hook: "Clear insights. Accurate statements. Complete visibility into your earnings.",
    text: "Our reporting process provides clear and accurate royalty statements, allowing you to track earnings and understand how your music is performing."
},
{
    title: "Personalised Support",
    hook: "Tailored account management dedicated exclusively to scaling your music career.",
    text: "Every songwriter and composer receives tailored support, strategic guidance and dedicated account management to help grow their career."
}
];

function showService(index){
    const detailBox = document.getElementById("serviceDetails");
    const titleEl = document.getElementById("serviceTitle");
    const hookEl = document.getElementById("serviceHook");
    const textEl = document.getElementById("serviceText");

    // Clear dynamic class strings to force interface frame re-rendering animation
    detailBox.classList.remove("fade-in");
    void detailBox.offsetWidth; 

    // Inject data content arrays
    titleEl.innerText = services[index].title;
    hookEl.innerText = services[index].hook;
    textEl.innerText = services[index].text;

    detailBox.classList.add("fade-in");

    // Toggle selected item highlighting strings
    document.querySelectorAll(".service-item").forEach((el, i) => {
        el.classList.toggle("active", i === index);
    });
}

</script>

</body>
</html>