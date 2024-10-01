<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pipeline Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container chat-container">
        <h2 class="text-center p-3">Chat UI</h2>
        <div class="chat-box d-flex flex-column" id="chatBox">
            <!-- Messages will be appended here -->
        </div>
        <div class="input-group chat-input">
            <input type="text" id="chatInput" class="form-control" placeholder="Type a message...">
            <div class="input-group-append">
                <button class="btn btn-primary" id="sendBtn" type="button">Send</button>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
