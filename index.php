<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Login or Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ebee;
            font-family: Arial, sans-serif;
        }
        .header {
            background: #3b5998;
            padding: 10px 0;
            color: white;
        }
        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-form {
            display: flex;
            gap: 10px;
        }
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        .left-section {
            width: 50%;
            padding: 20px;
        }
        .right-section {
            width: 30%;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Mark Zuckerberg's spyware</h1>
            <form class="login-form" method="POST" action="loginAction.php">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button type="submit" class="btn btn-light">Login</button>
            </form>
        </div>
    </div>
    <div class="container main-content">
        <div class="left-section">
            <h2>I send your personal data to the Chinese Government</h2>
        </div>
        <div class="right-section">
            <h3>Sign Up</h3>
            <p>It's free and anyone can join.</p>
            <form method="POST" action="registerAction.php">
                <input type="text" name="first_name" class="form-control mb-2" placeholder="First Name" required>
                <input type="text" name="last_name" class="form-control mb-2" placeholder="Last Name" required>
                <input type="email" name="email" class="form-control mb-2" placeholder="Your Email" required>
                <input type="password" name="password" class="form-control mb-2" placeholder="New Password" required>
                <button type="submit" class="btn btn-success w-100">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
