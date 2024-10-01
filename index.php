<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pipeline Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .chat-container {
            max-width: 600px;
            margin: 50px auto;
        }
        .chat-box {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            height: 400px;
            overflow-y: auto;
        }
        .chat-input {
            margin-top: 10px;
        }
        .chat-message {
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .chat-message.user1 {
            background-color: #007bff;
            color: white;
            text-align: left;
        }
        .chat-message.user2 {
            background-color: #f1f1f1;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container chat-container">
        <h2 class="text-center">Chat UI</h2>
        <div class="chat-box" id="chatBox">
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
    <script>
        let user = 1;
        document.getElementById('sendBtn').addEventListener('click', function() {
            const chatInput = document.getElementById('chatInput');
            const chatBox = document.getElementById('chatBox');
            const message = chatInput.value.trim();
            if (message) {
                const messageElement = document.createElement('div');
                messageElement.classList.add('chat-message', `user${user}`);
                messageElement.innerText = message;
                chatBox.appendChild(messageElement);
                chatInput.value = '';
                chatBox.scrollTop = chatBox.scrollHeight;
                user = user === 1 ? 2 : 1;
            }
        });
    </script>
</body>
</html>
