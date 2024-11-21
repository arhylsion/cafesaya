<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_hash($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="CSS\login.css">
</head>
<body>
<div class="box">
        <span class="borderLine"></span>
        <form method="POST" action="">
            <div class="inputBox">
                <h2>LOGIN CAFESAYA</h2>
                <?php if (isset($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>
                <input type="text" name="username" required="required">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Lupa Password</a>
                <a href="#">Daftar</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</head>
<body>
</body>
</html>
