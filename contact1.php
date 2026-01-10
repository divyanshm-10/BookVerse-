<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookVerse Contact Us</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #eef7ff, #d6ebff);
      color: #333;
      scroll-behavior: smooth;
    }

    header {
     background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      padding: 70px 20px;
      text-align: center;
      border-bottom-left-radius: 60px;
      border-bottom-right-radius: 60px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
    }

    header h1 {
      margin: 0;
      font-size: 40px;
      letter-spacing: 1px;
    }

    header p {
      font-size: 18px;
      margin-top: 12px;
      opacity: 0.95;
    }

    .contact-container {
      max-width: 1150px;
      margin: 60px auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 35px;
      padding: 0 20px;
    }

    .contact-card {
      background: #ffffff;
      border-radius: 20px;
      padding: 35px 25px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .contact-card:hover {
      transform: translateY(-7px);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
    }

    .contact-card img {
      width: 60px;
      margin-bottom: 18px;
    }

    .contact-card h3 {
      margin: 10px 0;
      font-size: 20px;
      color: #005f99;
    }

    .contact-card p {
      font-size: 15px;
      color: #444;
    }

    .form-section {
      background: #ffffff;
      border-radius: 25px;
      padding: 45px;
      margin: 70px auto;
      max-width: 720px;
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.1);
    }

    .form-section h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #315063ff;
      font-size: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #244b63ff;
      font-size: 15px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 13px;
      border: 1.5px solid #ccc;
      border-radius: 14px;
      font-size: 15px;
      background: #f9f9f9;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      border-color: #00aaff;
      outline: none;
      box-shadow: 0 0 8px rgba(0, 170, 255, 0.4);
      background: #fff;
    }

    button {
      width: 100%;
      padding: 15px;
      border: none;
      border-radius: 14px;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      font-size: 17px;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    button:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    /* Footer */
    footer {
     background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
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
</head>

<body>

  <header>
    <h1>Contact Us</h1>
    <p>We’d love to hear from you! Reach out for queries, feedback, or collaborations.</p>
  </header>

  <div class="contact-container">
    <div class="contact-card">
      <img src="https://img.icons8.com/ios-filled/100/0f4c75/phone.png" alt="Phone">
      <h3>Call Us</h3>
      <p>+91 7992159410</p>
    </div>
    <div class="contact-card">
      <img src="https://img.icons8.com/ios-filled/100/0f4c75/email.png" alt="Email">
      <h3>Email</h3>
      <p>divyanshm989@gmail.com</p>
    </div>
    <div class="contact-card">
      <img src="https://img.icons8.com/ios-filled/100/0f4c75/marker.png" alt="Location">
      <h3>Visit Us</h3>
      <p>I.T.S Engineering College,<br>Greater Noida, UP, India</p>
    </div>
  </div>

  <div class="form-section">
    <h2>Send Us a Message</h2>
    <form>
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" id="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" rows="5" placeholder="Write your message here..." required></textarea>
      </div>
      <button type="submit">Send Message</button>
    </form>
  </div>

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