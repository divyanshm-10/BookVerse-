<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Collection with Floating Icons</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>

        /* Floating book icons */
        .book-icon {
            position: absolute;
            font-size: 40px;
            color: #2e6296ff;
            animation: float 12s linear infinite;
            z-index: 1;
            /* behind books */
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            20% {
                opacity: 1;
            }

            80% {
                opacity: 1;
            }

            100% {
                transform: translateY(-200px) rotate(360deg);
                opacity: 0;
            }
        }

        .particle {
    position: absolute;
    width: 10px;
    height: 10px;
    background: #0a5679ff;
    border-radius: 50%;
    opacity: 0.6;
    animation: particleMove 12s linear infinite;
  }
  
  @keyframes particleMove {
    0% { transform: translateY(100vh); opacity: 0.6; }
    50% { opacity: 1; }
    100% { transform: translateY(-100px); opacity: 0; }
  }

    </style>
</head>

<body>


    <!-- Floating icons -->
    <div class="book-icon" style="left: 10%; animation-delay: 0s;"><i class="fa-solid fa-book"></i></div>
    <div class="particle" style="left:20%; animation-duration: 10s;"></div>
    <div class="book-icon" style="left: 30%; animation-delay: 0s;"><i class="fa-solid fa-book-open"></i></div>
    <div class="particle" style="left:40%; animation-duration: 10s;"></div>
    <div class="book-icon" style="left: 50%; animation-delay: 0s;"><i class="fa-solid fa-book"></i></div>
    <div class="particle" style="left:60%; animation-duration: 10;"></div>
    <div class="book-icon" style="left: 70%; animation-delay: 0s;"><i class="fa-solid fa-book-open"></i></div>
    <div class="particle" style="left:78%; animation-duration: 10s;"></div>
    <div class="book-icon" style="left: 85%; animation-delay: 0s;"><i class="fa-solid fa-book"></i></div>

    

</body>

</html>