<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Register - BookVerse</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #eef7ff, #d6ebff);
      color: #333;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 80vh;
      padding: 20px;
    }

    .form-box {
      background: #ffffff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
      width: 350px;
      text-align: center;
    }

    .form-box h2 {
      margin-bottom: 25px;
      color: #005f99;
    }

    .form-box input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 12px;
      border: 1.5px solid #ccc;
      font-size: 14px;
    }

    .form-box input:focus {
      border-color: #00aaff;
      outline: none;
      box-shadow: 0 0 8px rgba(0, 170, 255, 0.4);
    }

    .form-box button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 12px;
      background: linear-gradient(135deg, #005f99, #00aaff);
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .form-box button:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Small Footer */
    footer {
      background: linear-gradient(135deg, #1f1c2c, #928dab);
      color: #fff;
      padding: 40px 20px 20px;
      position: relative;
      overflow: hidden;
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
    }

    .footer-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      max-width: 1000px;
      margin: 0 auto;
      z-index: 2;
      position: relative;
    }

    .footer-column {
      flex: 1;
      min-width: 180px;
      margin-bottom: 20px;
      text-align: center;
      position: relative;
    }

    .footer-column h3 {
      color: #fff;
      font-size: 18px;
      margin-bottom: 8px;
    }

    .footer-column p {
      color: #ddd;
      font-size: 13px;
    }

    .footer-social {
      display: flex;
      gap: 12px;
      justify-content: center;
      margin-top: 6px;
    }

    .footer-social a img {
      width: 25px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .floating-book {
      position: absolute;
      width: 25px;
      height: 25px;
      z-index: 1;
      animation: moveBook 4s linear infinite;
    }

    .book1 {
      top: 5%;
      left: 10%;
      animation-delay: 0s;
    }

    .book2 {
      top: 30%;
      left: 70%;
      animation-delay: 1.5s;
    }

    .book3 {
      top: 60%;
      left: 20%;
      animation-delay: 3s;
    }

    .about-mid-book {
      position: absolute;
      top: -20px;
      left: 50%;
      transform: translateX(-50%);
      width: 40px;
      height: 40px;
      animation: spin3D 2s linear infinite;
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
        transform: translate(30px, -20px) rotate(15deg);
      }

      50% {
        transform: translate(-20px, 30px) rotate(-15deg);
      }

      75% {
        transform: translate(25px, -15px) rotate(10deg);
      }

      100% {
        transform: translate(0, 0) rotate(0deg);
      }
    }

    .footer-bottom {
      text-align: center;
      margin-top: 15px;
      font-size: 12px;
      color: #ccc;
    }

    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="form-box">
      <h2>Login</h2>
      <input type="email" placeholder="Email" required>
      <input type="password" placeholder="Password" required>
      <button>Login</button>
      <p style="margin-top:10px;">Don't have an account? <a href="#">Register</a></p>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <!-- Floating books -->
    <div class="floating-book book1"><img src="https://img.icons8.com/ios-filled/50/ff6b6b/book.png" alt="Book"></div>
    <div class="floating-book book2"><img src="https://img.icons8.com/ios-filled/50/1e90ff/book.png" alt="Book"></div>
    <div class="floating-book book3"><img src="https://img.icons8.com/ios-filled/50/ffa500/book.png" alt="Book"></div>

    <div class="footer-container">
      <div class="footer-column">
        <!-- Mid-point spinning open book -->
        <img src="https://img.icons8.com/ios-filled/50/ffffff/open-book.png" class="about-mid-book" alt="Open Book">
        <h3>About BookVerse</h3>
        <p>Your ultimate platform for books, reviews, and recommendations.</p>
      </div>
      <div class="footer-column">
        <h3>Contact</h3>
        <p>Email: divyanshm989@gmail.com</p>
        <p>Phone: +91 7992159410</p>
      </div>
      <div class="footer-column">
        <h3>Follow Us</h3>
        <div class="footer-social">
          <a href="#"><img src="https://img.icons8.com/ios-filled/50/808080/facebook-new.png"
              data-color="https://img.icons8.com/ios-filled/50/000000/facebook-new.png" alt="Facebook"></a>
          <a href="#"><img src="https://img.icons8.com/ios-filled/50/808080/twitter.png"
              data-color="https://img.icons8.com/ios-filled/50/1da1f2/twitter.png" alt="Twitter"></a>
          <a href="#"><img src="https://img.icons8.com/ios-filled/50/808080/instagram-new.png"
              data-color="https://img.icons8.com/ios-filled/50/fcaf45/instagram-new.png" alt="Instagram"></a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      &copy; 2025 BookVerse. All rights reserved.
    </div>

    <script>
      const socialIcons = document.querySelectorAll('.footer-social img');
      socialIcons.forEach(icon => {
        icon.addEventListener('mouseenter', () => {
          icon.src = icon.getAttribute('data-color'); // flip to original color
        });
        icon.addEventListener('mouseleave', () => {
          const name = icon.alt.toLowerCase();
          icon.src = `https://img.icons8.com/ios-filled/50/808080/${name}-new.png`; // revert to gray
        });
      });
    </script>
  </footer>

</body>

</html>