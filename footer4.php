<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookVerse Contact Us</title>
  <style>
    /* Footer */
    footer {
      background: linear-gradient(135deg, #2c3e50, #3498db);
  color: #ffffff;
      padding: 80px 20px 50px;
      position: relative;
      overflow: hidden;
    }

    .footer-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      max-width: 1150px;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }

    .footer-column {
      flex: 1;
      min-width: 220px;
      margin-bottom: 30px;
      position: relative;
    }

    .footer-column h3 {
      color: #005f99;
      margin-bottom: 20px;
      font-size: 20px;
      text-align: center;
    }

    .footer-column p,
    .footer-column a {
      font-size: 14px;
      color: #333;
      text-decoration: none;
      margin-bottom: 8px;
      display: block;
      text-align: center;
    }

    .footer-column a:hover {
      color: #00aaff;
    }

    /* Social icons with flip effect and bold color */
    .footer-social {
      display: flex;
      gap: 15px;
      justify-content: center;
      margin-top: 10px;
      perspective: 800px;
      /* 3D flip effect */
    }

    .footer-social a {
      width: 40px;
      height: 40px;
      display: block;
      position: relative;
      cursor: pointer;
      transform-style: preserve-3d;
      transition: transform 0.6s;
    }

    .footer-social a:hover {
      transform: rotateY(180deg);
    }

    .footer-social a img {
      width: 100%;
      height: 100%;
      display: block;
      border-radius: 50%;
      backface-visibility: hidden;
      object-fit: cover;
    }

    .footer-social a .back {
      position: absolute;
      top: 0;
      left: 0;
      transform: rotateY(180deg);
    }

    .footer-bottom {
      text-align: center;
      margin-top: 40px;
      font-size: 13px;
      color: #555;
      position: relative;
      z-index: 2;
    }

    /* Floating books animation across the full footer */
    .floating-book {
      position: absolute;
      width: 50px;
      height: 50px;
      z-index: 1;
      animation: moveBook 4s linear infinite;
      filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.4));
      /* bold shadow */
    }

    .floating-book img {
      width: 100%;
      display: block;
    }

    .book1 {
      top: 10%;
      left: 5%;
      animation-delay: 0s;
    }

    .book2 {
      top: 30%;
      left: 80%;
      animation-delay: 1s;
    }

    .book3 {
      top: 70%;
      left: 20%;
      animation-delay: 2s;
    }

    .book4 {
      top: 50%;
      left: 50%;
      animation-delay: 3s;
    }

    /* Open book at mid-point above About BookVerse */
    .about-mid-book {
      position: absolute;
      top: -35px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 60px;
      animation: spin3D 2s linear infinite;
      filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.4));
    }

    @keyframes spin3D {
      0% {
        transform: translateX(-50%) rotateY(0deg);
      }

      100% {
        transform: translateX(-50%) rotateY(360deg);
      }
    }

    @keyframes moveBook {
      0% {
        transform: translate(0, 0) rotate(0deg);
      }

      25% {
        transform: translate(80px, -30px) rotate(15deg);
      }

      50% {
        transform: translate(-40px, 50px) rotate(-15deg);
      }

      75% {
        transform: translate(50px, -40px) rotate(10deg);
      }

      100% {
        transform: translate(0, 0) rotate(0deg);
      }
    }
  </style>
  <body>
  <!-- Footer -->
  <footer>
    <!-- Floating books -->
    <div class="floating-book book1"><img src="https://img.icons8.com/ios-filled/50/ff0000/book.png" alt="Book"></div>
    <div class="floating-book book2"><img src="https://img.icons8.com/ios-filled/50/0000ff/book.png" alt="Book"></div>
    <div class="floating-book book3"><img src="https://img.icons8.com/ios-filled/50/ffa500/book.png" alt="Book"></div>
    <div class="floating-book book4"><img src="https://img.icons8.com/ios-filled/50/00c851/book.png" alt="Book"></div>

    <div class="footer-container">
      <div class="footer-column">
        <!-- Mid-point spinning open book -->
        <img src="https://img.icons8.com/ios-filled/50/005f99/open-book.png" class="about-mid-book" alt="Open Book">
        <a href="about1.php"><h3>About BookVerse</h3></a>
        <p>Your ultimate platform for books, reviews, and recommendations.</p>
      </div>
      <div class="footer-column">
        <a href="contact1.php"><h3>Contact</h3> </a>
        <p>Email: divyanshm989@gmail.com</p>
        <p>Phone: +91 7992159410</p>
      </div>
      <div class="footer-column">
        <h3>Follow Us</h3>
        <div class="footer-social">
          <a>
            <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook-new.png" class="front" alt="Facebook">
            <img src="https://img.icons8.com/ios-filled/50/3b5998/facebook-new.png" class="back" alt="Facebook">
          </a>
          <a>
            <img src="https://img.icons8.com/ios-filled/50/ffffff/twitter.png" class="front" alt="Twitter">
            <img src="https://img.icons8.com/ios-filled/50/1da1f2/twitter.png" class="back" alt="Twitter">
          </a>
          <a>
            <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" class="front" alt="Instagram">
            <img src="https://img.icons8.com/ios-filled/50/fc5a4d/instagram-new.png" class="back" alt="Instagram">
          </a>
          <a>
            <img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" class="front" alt="LinkedIn">
            <img src="https://img.icons8.com/ios-filled/50/0077b5/linkedin.png" class="back" alt="LinkedIn">
          </a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      &copy; 2025 BookVerse. All rights reserved. | Designed with ❤️ by Divyansh Maurya
    </div>
  </footer>

</body>

</html>