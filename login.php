<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $validUsername = 'admin';
    $validPassword = 'password123';

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: index.html');
        exit;
    } else {
        $error = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | KEN Technologies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
    <div class="login-card">
        <div class="brand">
            <img src="ETOCAD.png" alt="KEN Technologies Logo">
            <span>KEN Technologies</span>
        </div>

        <h1>Welcome back</h1>
        <p>Sign in to continue to your account.</p>

        <?php if ($error !== ''): ?>
            <div class="alert"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="post" action="">
            <div class="field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>

            <button type="submit" class="btn">Sign In</button>
        </form>

        <div class="hint">Demo credentials: username <strong>admin</strong> and password <strong>password123</strong></div>
        <div class="subtle"><a href="index.html">Back to home</a></div>
    </div>
</body>
</html>
