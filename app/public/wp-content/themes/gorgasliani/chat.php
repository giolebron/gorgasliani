<?php

/**
 * Template Name: ჩატი
 */
?>
<!DOCTYPE html>
<html lang="ka">

<head>
    <meta charset="UTF-8">
    <title>ჩატი</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <?php get_header(); ?>

    <div class="map-section">
        <div class="map-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Ellipse 17.png" alt="Map" class="map-image" />


            <div class="orbit-container">
                <div class="orbit orbit1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ისტორიკოსი 1.png" /></div>
                <div class="orbit orbit2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ისტორიკოსი 2.png" /></div>
                <div class="orbit orbit3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ისტორიკოსი 3.png" /></div>
                <div class="orbit orbit4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ისტორიკოსი 4.png" /></div>
                <div class="orbit orbit5"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ისტორიკოსი 5.png" /></div>
                <div class="orbit orbit6"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ისტორიკოსი 6.png" /></div>
                <div class="orbit orbit7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ისტორიკოსი 7.png" /></div>
                <div class="orbit orbit8"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ისტორიკოსი 8.png" /></div>
            </div>

        </div>
        <div class="chat-wrapper">
            <!-- Chat Icon -->
            <div id="messenger-icon" class="messenger-icon">
                <i class="fa-brands fa-facebook-messenger"></i>
            </div>

            <!-- Chat Window -->
            <div id="chat-box" class="chat" style="display: none;">
                <div class="chat-header">
                    <span>გორგასლიანი</span>
                    <i id="close-chat" class="fa-solid fa-chevron-down close-icon"></i>
                </div>
                <div id="chat-messages" class="chat-messages">
                    <div class="chat-message bot">გამარჯობა, რით შემიძლია დაგეხმაროთ?</div>
                </div>
                <div class="chat-input">
                    <input type="text" id="chat-input" placeholder="დაწერეთ შეტყობინება..." />
                    <button id="send-message">გაგზავნა</button>
                </div>
            </div>

        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const messengerIcon = document.getElementById("messenger-icon");
            const chatBox = document.getElementById("chat-box");
            const closeChat = document.getElementById("close-chat");
            const chatMessages = document.getElementById("chat-messages");
            const chatInput = document.getElementById("chat-input");
            const sendMessageBtn = document.getElementById("send-message");

            // Show chat
            messengerIcon.addEventListener("click", () => {
                chatBox.style.display = "flex";
                messengerIcon.style.display = "none";
            });

            // Close chat
            closeChat.addEventListener("click", () => {
                chatBox.style.display = "none";
                messengerIcon.style.display = "block";
            });

            // Send message
            function sendMessage() {
                const text = chatInput.value.trim();
                if (!text) return;

                // User message
                addMessage(text, "user");
                chatInput.value = "";

                // Bot reply after 1 sec
                setTimeout(() => {
                    addMessage("კიდევ რით შემიძლია დაგეხმაროთ?");
                }, 1000);
            }

            function addMessage(text, sender) {
                const message = document.createElement("div");
                message.className = `chat-message ${sender}`;
                message.textContent = text;
                chatMessages.appendChild(message);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            sendMessageBtn.addEventListener("click", sendMessage);
            chatInput.addEventListener("keypress", (e) => {
                if (e.key === "Enter") sendMessage();
            });
        });
    </script>


    <!--  -->

    <?php get_footer(); ?>
</body>

</html>