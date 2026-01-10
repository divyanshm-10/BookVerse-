<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Hole Loader 🌌🌀</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            font-family: 'Segoe UI', sans-serif;
            background: #0d7592ff;
        }

        #loader {
            position: fixed;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        /* Black hole center */
        .black-hole {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: radial-gradient(circle, #111, #000);
            box-shadow: 0 0 50px #0ff;
            position: absolute;
            z-index: 2;
        }

        /* Books orbiting */
        .book {
            width: 20px;
            height: 30px;
            background: linear-gradient(to right, #880e0eff, #ffadad);
            border-radius: 3px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: 0 0;
            animation: rise 4s ease-in-out infinite, bookFlip 2s infinite ease-in-out;
        }

        /* Different books from left and right */
        .book.left {
            transform-origin: -100px 0;
            animation-delay: 0s;
            background: linear-gradient(to right, #9a6511ff, #539555ff);
        }

        .book.right {
            transform-origin: 100px 0;
            animation-delay: 1s;
            background: linear-gradient(to right, #4b0992ff, #fddb92);
        }

        .book.left2 {
            transform-origin: -150px 0;
            animation-delay: 2s;
            background: linear-gradient(to right, #0e11dfff, #92fddb);
        }

        .book.right2 {
            transform-origin: 150px 0;
            animation-delay: 3s;
            background: linear-gradient(to right, #600978ff, rgba(57, 101, 126, 1));
        }

        @keyframes rise {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-200px) rotate(180deg);
            }

            100% {
                transform: translateY(0px) rotate(360deg);
            }
        }

        @keyframes bookFlip {

            0%,
            100% {
                transform: rotateY(0deg);
            }

            50% {
                transform: rotateY(180deg);
            }
        }

        /* Particles */
        .particle {
            position: absolute;
            width: 10px;
            height: 10px;
            background: rgba(5, 18, 59, 1);
            border-radius: 70%;
            animation: particleMove linear infinite;
        }

        @keyframes particleMove {
            0% {
                transform: translate(var(--startX), var(--startY));
                opacity: 1;
            }

            100% {
                transform: translate(0px, 0px);
                opacity: 0;
            }
        }

        .loading-text {
            position: absolute;
            bottom: 50px;
            color: #0ff;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 2px;
            animation: blink 1.5s infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }
    </style>
</head>

<body>

    <div id="loader">
        <div class="black-hole"></div>
        <div class="loading-text">Loading BookVerse...</div>
    </div>

    <script>
        const loader = document.getElementById('loader');

        // Add 10 particles moving toward black hole
        for (let i = 0; i < 10; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            const startX = (Math.random() * window.innerWidth - window.innerWidth / 2) + 'px';
            const startY = (Math.random() * window.innerHeight - window.innerHeight / 2) + 'px';
            particle.style.setProperty('--startX', startX);
            particle.style.setProperty('--startY', startY);
            particle.style.animationDuration = (2 + Math.random() * 3) + 's';
            loader.appendChild(particle);
        }

        // Add 4 books from both sides
        const bookClasses = ['left', 'right', 'left2', 'right2'];
        bookClasses.forEach(cls => {
            const book = document.createElement('div');
            book.classList.add('book', cls);
            loader.appendChild(book);
        });

        // Hide loader after 4 seconds
        window.addEventListener("load", function () {
            setTimeout(() => {
                loader.style.display = "none";
                document.body.style.overflow = "auto";
                window.location.href = "a3.php";
            }, 4000);
        });
    </script>
</body>

</html>