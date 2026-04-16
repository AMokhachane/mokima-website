<?php
session_start();
include "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['user'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", sans-serif;
    }

    body {
        height: 100vh;
        background: #1c1c1c; /* black/charcoal */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-container {
        background: #2a2a2a; /* dark grey */
        padding: 40px;
        width: 360px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        text-align: center;
        color: #fff;
    }

    .login-container h2 {
        margin-bottom: 25px;
        color: #ffcc00; /* yellow */
        letter-spacing: 1px;
    }

    .input-group {
        margin-bottom: 18px;
        text-align: left;
    }

    .input-group label {
        font-size: 13px;
        color: #bbb;
        margin-bottom: 5px;
        display: block;
    }

    .input-group input {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: none;
        background: #3a3a3a;
        color: white;
        outline: none;
        transition: 0.3s;
    }

    .input-group input:focus {
        border: 1px solid #ffcc00;
        box-shadow: 0 0 8px rgba(255, 204, 0, 0.4);
    }

    .login-btn {
        width: 100%;
        padding: 12px;
        background: #ffcc00;
        border: none;
        color: black;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
        margin-top: 10px;
    }

    .login-btn:hover {
        background: #e6b800;
    }

    .error {
        background: rgba(255, 0, 0, 0.15);
        color: #ff4d4d;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 15px;
        font-size: 14px;
        border: 1px solid rgba(255, 0, 0, 0.3);
    }
</style>
</head>

<body>

<div class="login-container">
    <h2>Admin Login</h2>

    <?php if ($error): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>
    </form>
</div>

</body>
</html>