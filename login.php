<?php
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | KEN Technologies</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
            background:
                radial-gradient(circle at top left, rgba(0, 212, 255, 0.16), transparent 30%),
                linear-gradient(135deg, #070b12 0%, #0f1624 100%);
            color: #e8eaf0;
            font-family: 'Space Grotesk', sans-serif;
        }

        .login-card {
            width: min(100%, 430px);
            background: rgba(15, 22, 36, 0.9);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 32px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(16px);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            font-family: 'DM Mono', monospace;
            color: #00d4ff;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .brand img {
            width: 42px;
            height: 42px;
            border-radius: 10px;
        }

        .login-card h1 {
            font-size: 1.7rem;
            margin-bottom: 8px;
        }

        .login-card p {
            color: #8892a4;
            margin-bottom: 24px;
        }

        .alert {
            background: rgba(255, 77, 77, 0.12);
            border: 1px solid rgba(255, 77, 77, 0.28);
            color: #ff8a8a;
            padding: 12px 14px;
            border-radius: 12px;
            margin-bottom: 18px;
            font-size: 0.95rem;
        }

        .field {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.95rem;
            color: #cfd6e4;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.1);
            background: rgba(255,255,255,0.04);
            color: #f2f5fb;
            outline: none;
        }

        input:focus {
            border-color: #00d4ff;
            box-shadow: 0 0 0 3px rgba(0, 212, 255, 0.16);
        }

        .btn {
            width: 100%;
            border: none;
            padding: 13px 16px;
            border-radius: 12px;
            background: linear-gradient(90deg, #00d4ff, #7c3aed);
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease;
            margin-top: 8px;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .subtle {
            text-align: center;
            margin-top: 16px;
            font-size: 0.92rem;
            color: #8892a4;
        }

        .subtle a {
            color: #00d4ff;
        }

        .hint {
            margin-top: 14px;
            font-size: 0.86rem;
            color: #6f7b92;
            background: rgba(255,255,255,0.03);
            padding: 10px 12px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
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
