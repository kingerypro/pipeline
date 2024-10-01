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
        @media (max-width: 576px) {
            .navbar {
                display: flex;
                flex-direction: column;
            }
            .nav-link {
                padding: 15px 0;
            }
        }
        .chatbox {
            position: fixed;
            bottom: 0;
            right: 20px;
            width: 300px;
            max-width: 100%;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .chatbox-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            cursor: pointer;
        }
        .chatbox-body {
            display: none;
            background-color: white;
            max-height: 400px;
            overflow-y: auto;
        }
        .chatbox-footer {
            display: none;
            background-color: #f1f1f1;
            padding: 10px;
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
    
    <!-- Chatbot UI -->
    <div class="chatbox">
        <div class="chatbox-header">
            Chat with us!
        </div>
        <div class="chatbox-body">
            <div class="p-3">
                <div class="d-flex justify-content-start mb-2">
                    <div class="p-2 bg-light rounded">Hello! How can I help you?</div>
                </div>
                <!-- Messages will be appended here -->
            </div>
        </div>
        <div class="chatbox-footer">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type a message...">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">Send</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.querySelector('.chatbox-header').addEventListener('click', function() {
            const chatboxBody = document.querySelector('.chatbox-body');
            const chatboxFooter = document.querySelector('.chatbox-footer');
            const isVisible = chatboxBody.style.display === 'block';
            chatboxBody.style.display = isVisible ? 'none' : 'block';
            chatboxFooter.style.display = isVisible ? 'none' : 'block';
        });
    </script>
</body>
</html>
