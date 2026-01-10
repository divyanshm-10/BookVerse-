<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Feedback section */
        .feedback {
            position: relative;
            /* keeps floating icons inside */
            overflow: hidden;
            background: linear-gradient(135deg, #f5f7fa, #c3d9ec);
            padding: 50px;
            border-radius: 15px;
            max-width: 600px;
            margin: 50px auto;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 1;
        }

        .feedback h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2e6296;
        }

        .feedback form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 2;
            position: relative;
        }

        .feedback input,
        .feedback select,
        .feedback textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            width: 100%;
        }

        .feedback button {
            background: #2e6296;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .feedback button:hover {
            background: #1d456a;
        }

        /* Floating book icons */
        .book-icon {
            position: absolute;
            font-size: 40px;
            color: #2e6296ff;
            animation: float 12s linear infinite;
            z-index: 0;
            /* behind form */
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

        /* Particle dots */
        .particle {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #0a5679ff;
            border-radius: 50%;
            opacity: 0.6;
            animation: particleMove 12s linear infinite;
            z-index: 0;
        }

        @keyframes particleMove {
            0% {
                transform: translateY(100vh);
                opacity: 0.6;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px);
                opacity: 0;
            }
        }
    </style>
</head>

<body>

    <section class="feedback" id="feedback">
        <h2 class="heading">Student Feedback</h2>
        <form action="code.php" method="POST">
            <input type="text" name="user" placeholder="Enter your Name" required>
            <input type="email" name="email" placeholder="Enter your Email" required>
            <input type="text" name="number" placeholder="Enter your Number" required>
            <select name="category" required>
                <option value="">Select Book Category</option>
                <option>Computer Science</option>
                <option>Mathematics</option>
                <option>Science</option>
                <option>Literature</option>
                <option>Business</option>
            </select>
            <textarea name="co" rows="4" placeholder="Write your feedback..." required></textarea>
            <button type="submit">Submit Feedback</button>

            <!-- Floating Book Icons -->
            <div class="book-icon" style="left: 10%; animation-delay: 0s;"><i class="fa-solid fa-book"></i></div>
            <div class="particle" style="left:20%; animation-duration: 10s;"></div>
            <div class="book-icon" style="left: 30%; animation-delay: 2s;"><i class="fa-solid fa-book-open"></i></div>
            <div class="particle" style="left:40%; animation-duration: 12s;"></div>
            <div class="book-icon" style="left: 50%; animation-delay: 4s;"><i class="fa-solid fa-book"></i></div>
            <div class="particle" style="left:60%; animation-duration: 14s;"></div>
            <div class="book-icon" style="left: 70%; animation-delay: 6s;"><i class="fa-solid fa-book-open"></i></div>
            <div class="particle" style="left:78%; animation-duration: 16s;"></div>
            <div class="book-icon" style="left: 85%; animation-delay: 8s;"><i class="fa-solid fa-book"></i></div>
        </form>
    </section>

</body>

</html>