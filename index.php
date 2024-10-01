<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pipeline Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background: #333;
            color: #fff;
            padding: 30px 0;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            text-transform: uppercase;
        }
        .sidebar a:hover {
            background: #575757;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            flex: 1;
            min-width: 200px;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Pipeline Dashboard</h2>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </div>
    <div class="main-content">
        <header>
            <h1>Welcome to the Pipeline Dashboard</h1>
        </header>
        <div class="cards">
            <div class="card">
                <h3>Card 1</h3>
                <p>Content for card 1</p>
            </div>
            <div class="card">
                <h3>Card 2</h3>
                <p>Content for card 2</p>
            </div>
            <div class="card">
                <h3>Card 3</h3>
                <p>Content for card 3</p>
            </div>
        </div>
        <footer>
            <p>Pipeline &copy; 2024</p>
        </footer>
    </div>
</body>
</html>
