<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bookstore Footer UI</title>
<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #e1f5fe;
    color: #333;
  }

  footer {
    background: #0f4c75; /* dim sky blue */
    color: #e1f5fe;
    padding: 60px 20px 30px 20px;
  }

  .footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: auto;
  }

  .footer-left, .footer-center, .footer-right {
    flex: 1;
    min-width: 250px;
    margin: 10px;
    background: rgba(255,255,255,0.05);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .footer-left:hover, .footer-center:hover, .footer-right:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.4);
  }

  .footer-left h2 {
    font-size: 26px;
    margin-bottom: 15px;
    color: #81d4fa;
  }

  .footer-left p, .footer-left a {
    color: #e1f5fe;
    text-decoration: none;
    margin: 5px 0;
    display: block;
    transition: color 0.3s;
  }

  .footer-left a:hover {
    color: #a3d2f2;
  }

  .social-icons a {
    margin-right: 12px;
    display: inline-block;
    transition: transform 0.3s, color 0.3s;
  }
  .social-icons a:hover {
    transform: scale(1.3);
    color: #a3d2f2;
  }

  .footer-center h3,
  .footer-right h3 {
    color: #81d4fa;
    margin-bottom: 15px;
  }

  .footer-center ul {
    list-style: none;
    padding: 0;
  }
  .footer-center ul li {
    margin: 10px 0;
  }
  .footer-center ul li a {
    color: #e1f5fe;
    text-decoration: none;
    transition: 0.3s;
  }
  .footer-center ul li a:hover {
    color: #a3d2f2;
  }

  .footer-right iframe {
    width: 100%;
    height: 180px;
    border: 0;
    border-radius: 12px;
    margin-bottom: 15px;
    transition: transform 0.3s;
  }

  .newsletter {
    display: flex;
    flex-wrap: wrap;
    margin-top: 10px;
  }

  .newsletter input {
    padding: 10px;
    flex: 1;
    border: none;
    border-radius: 8px 0 0 8px;
    outline: none;
    background: rgba(255,255,255,0.1);
    color: #e1f5fe;
    transition: background 0.3s;
  }

  .newsletter input:focus {
    background: rgba(255,255,255,0.2);
  }

  .newsletter button {
    padding: 10px 20px;
    border: none;
    background-color: #81d4fa;
    color: #0f4c75;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
    transition: background 0.3s, transform 0.3s;
  }

  .newsletter button:hover {
    background-color: #a3d2f2;
    transform: scale(1.05);
  }

  .footer-bottom {
    text-align: center;
    margin-top: 40px;
    border-top: 1px solid #81d4fa;
    padding-top: 15px;
    font-size: 14px;
    color: #e1f5fe;
  }

  @media (max-width: 768px) {
    .footer-container { flex-direction: column; text-align: center; }
    .newsletter { flex-direction: column; }
    .newsletter input, .newsletter button { border-radius: 8px; margin: 5px 0; }
  }
</style>
</head>
<body>

<footer>
  <div class="footer-container">
    <div class="footer-left">
      <h2>BookVerse</h2>
      <p>Email: <a href="mailto:info@bookverse.com">info@bookverse.com</a></p>
      <p>Phone: <a href="tel:+919876543210">+91 9876543210</a></p>
      <div class="social-icons">
        <a href="#"><img src="https://img.icons8.com/ios-filled/24/ffffff/facebook-new.png"/></a>
        <a href="#"><img src="https://img.icons8.com/ios-filled/24/ffffff/twitter.png"/></a>
        <a href="#"><img src="https://img.icons8.com/ios-filled/24/ffffff/instagram-new.png"/></a>
      </div>
    </div>

    <div class="footer-center">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Best Sellers</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="footer-right">
      <h3>Our Location</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.798702716518!2d77.49252807518987!3d28.599106782418175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5f6f10f02bb%3A0x1f3baf7f8b2b1d68!2sKnowledge%20Park%203%2C%20Greater%20Noida!5e0!3m2!1sen!2sin!4v1692248627558!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      <div class="newsletter">
        <input type="email" placeholder="Subscribe to newsletter">
        <button>Subscribe</button>
      </div>
    </div>
  </div>

  <div class="footer-bottom">&copy; 2025 BookVerse. All Rights Reserved.</div>
</footer>

</body>
</html>
