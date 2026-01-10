<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Icons with Flip Effect</title>
    <style>
        body {
            background: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .social {
            display: flex;
            gap: 20px;
        }

        .icon {
            width: 50px;
            height: 50px;
            perspective: 1000px;
            /* enables 3D */
            cursor: pointer;
        }

        .icon-inner {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.6s ease;
        }

        /* Flip animation */
        .icon.flipped .icon-inner {
            transform: rotateY(180deg);
        }

        .icon-front,
        .icon-back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            /* hides backside */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-back {
            transform: rotateY(180deg);
        }

        img {
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>
    <div class="social">
        <!-- Facebook -->
        <div class="icon" onclick="flipIcon(this, 'https://www.facebook.com')">
            <div class="icon-inner">
                <div class="icon-front">
                    <img src="https://img.icons8.com/ios-filled/40/ffffff/facebook-new.png" alt="Facebook">
                </div>
                <div class="icon-back">
                    <img src="https://img.icons8.com/color/40/facebook-new.png" alt="Facebook">
                </div>
            </div>
        </div>

        <!-- Twitter -->
        <div class="icon" onclick="flipIcon(this, 'https://www.twitter.com')">
            <div class="icon-inner">
                <div class="icon-front">
                    <img src="https://img.icons8.com/ios-filled/40/ffffff/twitter.png" alt="Twitter">
                </div>
                <div class="icon-back">
                    <img src="https://img.icons8.com/color/40/twitter.png" alt="Twitter">
                </div>
            </div>
        </div>

        <!-- Instagram -->
        <div class="icon" onclick="flipIcon(this, 'https://www.instagram.com')">
            <div class="icon-inner">
                <div class="icon-front">
                    <img src="https://img.icons8.com/ios-filled/40/ffffff/instagram-new.png" alt="Instagram">
                </div>
                <div class="icon-back">
                    <img src="https://img.icons8.com/color/40/instagram-new.png" alt="Instagram">
                </div>
            </div>
        </div>

        <!-- LinkedIn -->
        <div class="icon" onclick="flipIcon(this, 'https://www.linkedin.com')">
            <div class="icon-inner">
                <div class="icon-front">
                    <img src="https://img.icons8.com/ios-filled/40/ffffff/linkedin.png" alt="LinkedIn">
                </div>
                <div class="icon-back">
                    <img src="https://img.icons8.com/color/40/linkedin.png" alt="LinkedIn">
                </div>
            </div>
        </div>

        <!-- GitHub -->
        <div class="icon" onclick="flipIcon(this, 'https://www.github.com')">
            <div class="icon-inner">
                <div class="icon-front">
                    <img src="https://img.icons8.com/ios-filled/40/ffffff/github.png" alt="GitHub">
                </div>
                <div class="icon-back">
                    <img src="https://img.icons8.com/ios-glyphs/40/000000/github.png" alt="GitHub">
                </div>
            </div>
        </div>

        <!-- YouTube -->
        <div class="icon" onclick="flipIcon(this, 'https://www.youtube.com')">
            <div class="icon-inner">
                <div class="icon-front">
                    <img src="https://img.icons8.com/ios-filled/40/ffffff/youtube.png" alt="YouTube">
                </div>
                <div class="icon-back">
                    <img src="https://img.icons8.com/color/40/youtube-play.png" alt="YouTube">
                </div>
            </div>
        </div>

        <!-- Pinterest -->
        <div class="icon" onclick="flipIcon(this, 'https://www.pinterest.com')">
            <div class="icon-inner">
                <div class="icon-front">
                    <img src="https://img.icons8.com/ios-filled/40/ffffff/pinterest.png" alt="Pinterest">
                </div>
                <div class="icon-back">
                    <img src="https://img.icons8.com/color/40/pinterest--v1.png" alt="Pinterest">
                </div>
            </div>
        </div>
    </div>

    <script>
        function flipIcon(element, url) {
            // Only flip once
            if (!element.classList.contains("flipped")) {
                element.classList.add("flipped");
                setTimeout(() => {
                    window.open(url, "_blank");
                }, 600); // wait for flip animation before opening link
            }
        }
    </script>
</body>

</html>