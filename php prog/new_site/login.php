<?php
session_start();

// Dummy credentials
$valid_username = "student";
$valid_password = "12345";

$error = "";

// Handle login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $remember = isset($_POST["remember"]);

    if (empty($username) || empty($password)) {
        $error = "All fields are required.";
    } elseif ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;

        // Remember Me → store cookie
        if ($remember) {
            setcookie("username", $username, time() + (86400 * 7), "/"); // 7 days
        } else {
            setcookie("username", "", time() - 3600, "/"); // clear cookie
        }

        header("Location: resume.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}

// Check if cookie exists
$saved_username = isset($_COOKIE["username"]) ? $_COOKIE["username"] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Resume</title>
  <!-- Elegant font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      background: linear-gradient(135deg, #0096FF 0%, #6495ED 50%, #6F8FAF 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: #fff;
      padding: 40px 30px;
      border-radius: 14px;
      width: 360px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
      border-top: 5px solid #0047AB;
      text-align: center;
    }
    /* Custom Logo */
    .logo {
      width: 75px;
      height: 75px;
      margin: 0 auto 18px auto;
      background: linear-gradient(135deg, #0096FF, #0047AB);
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 3px 10px rgba(0,0,0,0.15);
      position: relative;
    }
    .logo::after {
      content: "✓"; /* checkmark */
      color: #fff;
      font-size: 32px;
      font-weight: bold;
    }
    .login-box h1 {
      color: #0047AB;
      margin-bottom: 8px;
      font-size: 24px;
    }
    .login-box p.welcome {
      font-size: 14px;
      color: #555;
      margin-bottom: 25px;
    }
    /* Inputs */
    .login-box input[type=text],
    .login-box input[type=password] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 2px solid #6F8FAF;
      border-radius: 8px;
      font-size: 14px;
      outline: none;
      transition: 0.3s;
      background: linear-gradient(135deg, #ffffff, #f0f8ff);
      color: #333;
      box-sizing: border-box;
    }
    .login-box input[type=text]:focus,
    .login-box input[type=password]:focus {
      border-color: #0096FF;
      box-shadow: 0 0 8px rgba(0,150,255,0.35);
      background: #fff;
    }
    /* Remember me */
    .login-box .remember {
      display: flex;
      align-items: center;
      font-size: 13px;
      margin: 15px 0 20px 0;
      color: #333;
      justify-content: flex-start;
    }
    .login-box .remember input {
      margin-right: 8px;
    }
    /* Button */
    .login-box input[type=submit] {
      background: linear-gradient(135deg, #0096FF, #0047AB);
      color: white;
      border: none;
      padding: 12px;
      border-radius: 6px;
      width: 100%;
      cursor: pointer;
      font-weight: bold;
      font-size: 15px;
      transition: 0.3s;
    }
    .login-box input[type=submit]:hover {
      background: #0047AB;
    }
    /* Error message */
    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 15px;
    }
    .footer-note {
      margin-top: 20px;
      font-size: 13px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <!-- Custom Blue Logo -->
    <div class="logo"></div>

    <h1>Welcome Back!</h1>
    <p class="welcome">Please log in to access your resume</p>

    <?php if($error): ?>
      <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
      <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($saved_username); ?>" required>
      <input type="password" name="password" placeholder="Password" required>
      <div class="remember">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
