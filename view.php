<?php
include "db.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM news WHERE id=$id");
$news = $result->fetch_assoc();

if (!$news) {
    echo "News not found";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $news['title']; ?></title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", sans-serif;
}

body {
    background: #1c1c1c;
    color: white;
}

/* HEADER */
.header {
    background: #111;
    padding: 20px 40px;
    border-bottom: 2px solid #ffcc00;
}

.header h1 {
    color: #ffcc00;
}

/* LAYOUT */
.wrapper {
    max-width: 1100px;
    margin: 60px auto;
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
    padding: 0 20px;
}

/* LEFT CONTENT */
.article {
    display: flex;
    flex-direction: column;
}

/* TITLE */
.article h1 {
    color: #ffcc00;
    font-size: 32px;
    margin-bottom: 10px;
}

/* DATE */
.date {
    color: #aaa;
    margin-bottom: 25px;
}

/* CONTENT */
.content {
    line-height: 1.9;
    color: #ddd;
    font-size: 16px;
}

/* RIGHT IMAGE */
.image-box {
    position: sticky;
    top: 40px;
    height: fit-content;
}

.image-box img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 12px;
}

/* BACK LINK */
.back {
    margin-top: 30px;
    display: inline-block;
    text-decoration: none;
    color: black;
    background: #ffcc00;
    padding: 10px 15px;
    border-radius: 8px;
    font-weight: bold;
}

/* MOBILE */
@media (max-width: 900px) {
    .wrapper {
        grid-template-columns: 1fr;
    }

    .image-box img {
        height: 250px;
    }
}
</style>
</head>

<body>

<div class="header">
    <h1>Mokima Publishing</h1>
</div>

<div class="wrapper">

    <!-- LEFT SIDE (TEXT ONLY) -->
    <div class="article">

        <h1><?php echo $news['title']; ?></h1>

        <div class="date">
            <?php echo date("d M Y", strtotime($news['created_at'])); ?>
        </div>

        <div class="content">
            <?php echo nl2br($news['content']); ?>
        </div>

        <a class="back" href="news.php">← Back to News</a>

    </div>

    <!-- RIGHT SIDE (IMAGE ONLY) -->
    <div class="image-box">
        <img src="assets/<?php echo $news['image']; ?>" alt="News Image">
    </div>

</div>

</body>
</html>