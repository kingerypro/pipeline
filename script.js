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
