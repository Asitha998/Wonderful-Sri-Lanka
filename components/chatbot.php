<div class="modal fade" id="chatBotModal" tabindex="-1" aria-labelledby="chatBotModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> 
        <div class="modal-content rounded-4 border-0"> 
            <div class="modal-header bg-success text-white rounded-top-4"> 
                <h5 class="modal-title text-white" id="chatBotModalLabel"><i class="fas fa-robot me-2"></i> Wonderful Sri Lanka Chat Assistant</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column p-4" style="height: 60vh;"> 
                <div id="chatMessages" class="flex-grow-1 mb-3 p-3 border border-light rounded-3 overflow-auto" style="background-color: var(--bs-white);">
                    <div class="d-flex justify-content-start mb-2">
                        <div class="p-3 bg-light text-dark rounded-3 me-auto" style="max-width: 80%;"> 
                            <small>Bot: Hello! Welcome to Wonderful Sri Lanka. How can I help you plan your journey today?</small>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <input type="text" id="chatInput" class="form-control rounded-pill py-2 border-primary" placeholder="Type your message..."> 
                    <button class="btn btn-primary rounded-pill px-4 ms-2" type="button" id="sendMessageBtn"> 
                        <i class="fas fa-paper-plane me-1"></i> Send
                    </button>
                </div>
                <div id="loadingIndicator" class="text-center mt-2" style="display: none;">
                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <small class="text-muted ms-2">Bot is typing...</small>
                </div>
            </div>
            <div class="modal-footer justify-content-center border-top-0">
                <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Close Chat</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chatInput = document.getElementById('chatInput');
        const sendMessageBtn = document.getElementById('sendMessageBtn');
        const chatMessages = document.getElementById('chatMessages');
        const loadingIndicator = document.getElementById('loadingIndicator');

        let chatHistory = []; 

        
        function displayMessage(sender, message, isUser = false) {
            const messageContainer = document.createElement('div');
            messageContainer.classList.add('d-flex', 'mb-2');

            const messageBubble = document.createElement('div');
            messageBubble.classList.add('p-3', 'rounded-3');
            messageBubble.style.maxWidth = '80%';

            if (isUser) {
                messageContainer.classList.add('justify-content-end');
                messageBubble.classList.add('bg-primary', 'text-white', 'ms-auto');
            } else {
                messageContainer.classList.add('justify-content-start');
                messageBubble.classList.add('bg-light', 'text-dark', 'me-auto');
            }

            messageBubble.innerHTML = `<small>${sender}: ${message}</small>`;
            messageContainer.appendChild(messageBubble);
            chatMessages.appendChild(messageContainer);
            chatMessages.scrollTop = chatMessages.scrollHeight; 
        }

        async function sendMessage() {
            const message = chatInput.value.trim();
            if (!message) return;

            displayMessage('You', message, true); 
            chatHistory.push({
                role: "user",
                parts: [{
                    text: message
                }]
            });
            chatInput.value = ''; 
            chatInput.disabled = true; 
            sendMessageBtn.disabled = true; 

            loadingIndicator.style.display = 'flex'; 

            const apiKey = "...Gemini Api Key";
            const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-05-20:generateContent?key=${apiKey}`;

            let retries = 0;
            const maxRetries = 5;
            let delay = 1000; 

            while (retries < maxRetries) {
                try {
                    const payload = {
                        contents: chatHistory
                    };
                    const response = await fetch(apiUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(payload)
                    });

                    if (response.ok) {
                        const result = await response.json();
                        if (result.candidates && result.candidates.length > 0 &&
                            result.candidates[0].content && result.candidates[0].content.parts &&
                            result.candidates[0].content.parts.length > 0) {
                            const botResponse = result.candidates[0].content.parts[0].text;
                            displayMessage('Bot', botResponse);
                            chatHistory.push({
                                role: "model",
                                parts: [{
                                    text: botResponse
                                }]
                            }); 
                        } else {
                            displayMessage('Bot', 'Sorry, I could not get a response. Please try again.');
                            console.error('Unexpected API response structure:', result);
                        }
                        break; 
                    } else if (response.status === 429) { 
                        retries++;
                        await new Promise(res => setTimeout(res, delay));
                        delay *= 2; 
                        console.warn(`API rate limit exceeded. Retrying in ${delay / 2000} seconds... (Attempt ${retries}/${maxRetries})`);
                    } else {
                        const errorData = await response.json();
                        displayMessage('Bot', `Error: ${errorData.error.message || 'Something went wrong with the API.'}`);
                        console.error('API Error:', response.status, errorData);
                        break;
                    }
                } catch (error) {
                    displayMessage('Bot', 'Network error. Please check your internet connection and try again.');
                    console.error('Fetch error:', error);
                    break; 
                }
            }

            if (retries === maxRetries) {
                displayMessage('Bot', 'Failed to get a response after multiple retries. Please try again later.');
            }

            loadingIndicator.style.display = 'none'; 
            chatInput.disabled = false; 
            sendMessageBtn.disabled = false; 
            chatInput.focus();
        }

        sendMessageBtn.addEventListener('click', sendMessage);

        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
    });
</script>
