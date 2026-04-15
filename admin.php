<?php
session_start();
include "db.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// ADD NEWS
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("INSERT INTO news (title, content) VALUES ('$title', '$content')");
}

// DELETE NEWS
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM news WHERE id=$id");
}
?>

<h2>Admin Panel</h2>

<form method="POST">
    <input type="text" name="title" placeholder="Title"><br>
    <textarea name="content" placeholder="Content"></textarea><br>
    <button type="submit" name="add">Add News</button>
</form>

<hr>

<h3>Existing News</h3>

<?php
$result = $conn->query("SELECT * FROM news ORDER BY id DESC");

while ($row = $result->fetch_assoc()) {
    echo "<h4>".$row['title']."</h4>";
    echo "<p>".$row['content']."</p>";
    echo "<a href='admin.php?delete=".$row['id']."'>Delete</a><hr>";
}
?>