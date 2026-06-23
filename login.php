<?php
session_start();
include "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Upgraded to Secure Prepared Statements to prevent SQL injection vulnerabilities
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // Direct plain-text matching based on your original template layout logic.
        // (If you hash your admin passwords with password_hash later, change this line to: if (password_verify($password, $row['password'])))
        if ($password === $row['password']) {
            $_SESSION['user'] = $username;
            header("Location: admin.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    } else {
        $error = "Invalid username or password";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | Mokima Publishing</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    body {
      height: 100vh;
      background: #e6e6e6; /* Unified editorial soft gray background */
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    /* CARD ARCHITECTURE */
    .login-container {
      background: #ffffff;
      padding: 45px 40px;
      width: 100%;
      max-width: 420px;
      border-radius: 16px;
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.06);
      border: 1px solid rgba(0, 0, 0, 0.03);
      text-align: center;
    }

    /* IDENTITY TEXT SYSTEMS */
    .login-container h2 {
      font-size: 1.6rem;
      font-weight: 800;
      color: #111111;
      text-transform: uppercase;
      letter-spacing: -0.5px;
      margin-bottom: 6px;
    }

    .subheading {
      font-size: 0.75rem;
      color: #666666;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      font-weight: 700;
      margin-bottom: 35px;
    }

    /* INPUT FIELDS ENGINE */
    .input-group {
      margin-bottom: 22px;
      text-align: left;
    }

    .input-group label {
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.5px;
      color: #111111;
      text-transform: uppercase;
      margin-bottom: 8px;
      display: block;
    }

    .input-wrapper {
      position: relative;
      display: flex;
      align-items: center;
    }

    .input-wrapper i {
      position: absolute;
      left: 14px;
      color: #999999;
      font-size: 0.95rem;
      transition: color 0.3s ease;
    }

    .input-wrapper input {
      width: 100%;
      padding: 14px 14px 14px 42px;
      border-radius: 10px;
      border: 1px solid rgba(0, 0, 0, 0.12);
      background: #fafafa;
      color: #111111;
      font-size: 0.95rem;
      font-weight: 500;
      outline: none;
      transition: border-color 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .input-wrapper input:focus {
      border-color: #b88a1c; /* Brand Gold focus transition */
      background: #ffffff;
      box-shadow: 0 0 0 4px rgba(184, 138, 28, 0.1);
    }

    .input-wrapper input:focus + i {
      color: #b88a1c;
    }

    /* ACTION INITIATOR */
    .login-btn {
      width: 100%;
      padding: 14px;
      background: #111111;
      border: none;
      color: #ffffff;
      border-radius: 10px;
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      cursor: pointer;
      font-weight: 800;
      transition: background-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
      margin-top: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
    }

    .login-btn:hover {
      background: #b88a1c; /* Gold rollover state */
      box-shadow: 0 5px 15px rgba(184, 138, 28, 0.2);
    }

    .login-btn:active {
      transform: scale(0.98);
    }

    /* UTILITY RETURN PATH WAY */
    .back-to-site {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      margin-top: 25px;
      text-decoration: none;
      font-size: 0.78rem;
      font-weight: 700;
      color: #666666;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: color 0.2s ease, transform 0.2s ease;
    }

    .back-to-site:hover {
      color: #b88a1c;
      transform: translateX(-2px);
    }

    /* ALERT STACKING */
    .error {
      background: rgba(214, 48, 49, 0.06);
      color: #d63031;
      padding: 12px 16px;
      border-radius: 10px;
      margin-bottom: 25px;
      font-size: 0.85rem;
      font-weight: 600;
      border: 1px solid rgba(214, 48, 49, 0.15);
      display: flex;
      align-items: center;
      gap: 8px;
      text-align: left;
    }
  </style>
</head>

<body>

<div class="login-container">
  <h2>Admin Access</h2>
  <div class="subheading">Mokima Control Panel</div>

  <?php if ($error): ?>
    <div class="error">
      <i class="fa-solid fa-circle-exclamation"></i>
      <?php echo $error; ?>
    </div>
  <?php endif; ?>

  <form method="POST">
    <div class="input-group">
      <label>Username</label>
      <div class="input-wrapper">
        <input type="text" name="username" placeholder="Enter your username" autocomplete="username" required>
        <i class="fa-solid fa-user"></i>
      </div>
    </div>

    <div class="input-group">
      <label>Password</label>
      <div class="input-wrapper">
        <input type="password" name="password" placeholder="••••••••" autocomplete="current-password" required>
        <i class="fa-solid fa-lock"></i>
      </div>
    </div>

    <button type="submit" class="login-btn">
      Secure Login <i class="fa-solid fa-shield-halved"></i>
    </button>
  </form>

  <a href="index.php" class="back-to-site">
    <i class="fa-solid fa-arrow-left"></i> Return to Homepage
  </a>
</div>

</body>
</html>