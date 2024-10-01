<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pipeline Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media (max-width: 768px) {
            .navbar {
                width: 100%;
                height: auto;
            }
            .navbar-brand, .nav-link {
                text-align: center;
                padding: 10px 0;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <nav class="navbar navbar-dark bg-dark flex-column">
            <a class="navbar-brand" href="#">Pipeline Dashboard</a>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="container-fluid main-content">
            <header class="bg-dark text-white text-center p-3">
                <h1>Welcome to the Pipeline Dashboard</h1>
            </header>
            <div class="row mt-3">
                <?php
                    $directory = '.'; // Change this to your desired directory
                    $files = scandir($directory);
                    foreach ($files as $file) {
                        if ($file !== '.' && $file !== '..') {
                            echo "<div class='col-sm-4 mb-3'><div class='card'><div class='card-body'><h5 class='card-title'>$file</h5></div></div></div>";
                        }
                    }
                ?>
            </div>
            <footer class="bg-dark text-white text-center p-3 mt-auto">
                <p>Pipeline &copy; 2024</p>
            </footer>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
