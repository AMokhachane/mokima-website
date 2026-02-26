<style>
/* ===== NAVBAR ===== */
.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    display: flex;
    align-items: center;
    padding: 15px 40px;
    background: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(5px);
    z-index: 1000;
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 50px;
    margin-right: 15px;
}

.logo h1 {
    color: white;
    font-size: 1.3rem;
    margin: 0;
    letter-spacing: 2px;
}

.nav-links {
    display: flex;
    margin-left: 300px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 0.95rem;
    transition: 0.3s;
    margin-left: 30px;
}

.nav-links a:hover {
    color: #f0c040;
}

</style>

<div class="navbar">
    <div class="logo">
        <img src="assets/logo.png" alt="Mokima Logo">
        <h1>MOKIMA PUBLISHING</h1>
    </div>

    <div class="nav-links">
        <a href="songwriters.php">OUR SONGWRITERS</a>
        <a href="playlist.php">OUR PLAYLIST</a>
        <a href="about.php">WHAT WE DO</a>
        <a href="contact.php">CONTACT US</a>
        <a href="news.php">LATEST NEWS</a>
        <a href="faqs.php">FAQs</a>
        <a href="login.php">LOGIN</a>
    </div>
</div>
