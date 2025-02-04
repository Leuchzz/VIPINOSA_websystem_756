<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color:rgb(76, 111, 175);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color:rgb(21, 85, 223);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-container">
                <div class="nav-item">
                    <h1>Facebook Dashboard™</h1>
                </div>
                <div class="nav-item">
                    <a href="index.php" id="sign-out-button">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <button type="submit" class="btn btn-primary w-100">Sign Out</button>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="grid">
            <div class="card">
                <h2>First step</h2>
                <p>go to GitHub Desktop, Git Commit, yada yada</p>
            </div>
            <div class="card">
                <h2>Second Step</h2>
                <p>Open XMAP, myPHP admin(install dependencies)</p>
            </div>
            <div class="card">
                <h2>Third Step</h2>
                <p>Create Database in My PHP, connect it to the php</p>
            </div>
            <div class="card">
                <h2>Last step</h2>
                <p>Connect variables using thingy(use chatgpt to explain sir's code)</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.0/js/fontawesome.min.js"></script>
</body>
</html>