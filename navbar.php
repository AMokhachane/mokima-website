<style>
/* ===== NAVBAR ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 25px;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(6px);
    z-index: 1000;
}

/* ===== LOGO ===== */
.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 45px;
    margin-right: 10px;
}

.logo h1 {
    color: white;
    font-size: 18px;
    letter-spacing: 1px;
    font-family: Arial, sans-serif;
}

/* ===== NAV LINKS (DESKTOP) ===== */
.nav-links {
    display: flex;
    gap: 25px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 0.95rem;
    font-family: Arial, sans-serif;
    transition: 0.3s;
}

.nav-links a:hover {
    color: #f0c040;
}

/* ===== HAMBURGER ===== */
.menu-toggle {
    display: none;
    flex-direction: column;
    cursor: pointer;
    z-index: 1101;
}

.menu-toggle span {
    width: 25px;
    height: 3px;
    background: white;
    margin: 4px 0;
    border-radius: 5px;
}

/* ===== FULL SCREEN MENU (MOBILE) ===== */
@media screen and (max-width: 768px) {

    .menu-toggle {
        display: flex;
    }

    /* hide desktop nav */
    .nav-links {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;

        background: rgba(0, 0, 0, 0.95);

        flex-direction: column;
        justify-content: center;
        align-items: center;

        gap: 25px;

        transform: scale(0);
        transition: 0.3s ease-in-out;

        z-index: 1100;
    }

    .nav-links.active {
        transform: scale(1);
    }

    .nav-links a {
        font-size: 1.5rem;
    }

    .logo img {
        height: 38px;
    }

    .logo h1 {
        font-size: 13px;
    }
}
</style>

<!-- ===== NAVBAR ===== -->
<div class="navbar">

    <!-- LOGO -->
    <div class="logo">
        <img src="assets/logo.png" alt="Mokima Logo">
        <h1>MOKIMA PUBLISHING</h1>
    </div>

    <!-- HAMBURGER -->
    <div class="menu-toggle" id="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- NAV LINKS -->
    <div class="nav-links" id="nav-links">
        <a href="index.php">HOME</a>
        <a href="songwriters.php">OUR SONGWRITERS</a>
        <a href="playlist.php">OUR PLAYLIST</a>
        <a href="about.php">WHAT WE DO</a>
        <a href="contact.php">CONTACT US</a>
        <a href="news.php">LATEST NEWS</a>
        <a href="faqs.php">FAQs</a>
        <a href="login.php">LOGIN</a>
    </div>

</div>

<!-- ===== JAVASCRIPT ===== -->
<script>
const menuToggle = document.getElementById("menu-toggle");
const navLinks = document.getElementById("nav-links");

menuToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});
</script>