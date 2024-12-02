
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Fixed button to toggle quick chat options -->
<div class="quick-chat-toggle">
    <i class="fas fa-comment-dots"></i>
</div>

<!-- Quick chat options -->
<section>
    <div class="quick-chat">
        <a href="tel:+919263106585" class="quick-chat-item phone">
            <i class="fas fa-phone-alt"></i>
        </a>
        <a href="https://wa.me/9263106585" class="quick-chat-item whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</section>
    <script>
        $(document).ready(function () {
        // Toggle quick chat options on button click
        $('.quick-chat-toggle').click(function () {
            var chatBox = $('.quick-chat');
            if (chatBox.css('left') === '0px') {
                chatBox.css('left', '-200px'); // Move off-screen
            } else {
                chatBox.css('left', '0'); // Move on-screen
            }
        });

        // Close quick chat if clicked outside
        $(document).click(function (event) {
            var chatBox = $('.quick-chat');
            var toggleButton = $('.quick-chat-toggle');
            
            if (!chatBox.is(event.target) && chatBox.has(event.target).length === 0 && !toggleButton.is(event.target) && toggleButton.has(event.target).length === 0) {
                chatBox.css('left', '-200px'); // Close quick chat
            }
        });

        // Add hover effect to icons
        $('.quick-chat-item').hover(
            function () {
                $(this).find('i').css({
                    'transform': 'rotate(360deg) scale(1.3)'
                });
            },
            function () {
                $(this).find('i').css({
                    'transform': 'rotate(0deg) scale(1)'
                });
            }
        );
    });
    </script>
