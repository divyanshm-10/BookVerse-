<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookVerse</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Custom CSS -->
  <style>
    /* Base Reset */
    * { margin:0; padding:0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

    body {
      background: linear-gradient(135deg, #e9fce9, #f9fff9);
      color: #222;
    }

    /* Header */
    .header {
      position: sticky;
      top: 0;
      width: 100%;
      background: #1c7430;
      color: #fff;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      z-index: 1000;
    }
    .header-1, .header-2 {
      display: flex; align-items: center; justify-content: space-between;
      padding: 15px 5%;
    }
    .header .logo { font-size: 1.5rem; font-weight: bold; color: #fff; text-decoration: none; }
    .header .navbar a {
      margin: 0 10px;
      text-transform: capitalize;
      font-size: 1rem;
      color: #fff;
      transition: 0.3s;
    }
    .header .navbar a:hover { color: #ffe57f; }

    /* Search box */
    .search-form input {
      border: none; padding: 8px 12px; border-radius: 20px;
      outline: none; width: 220px;
    }

    /* Home Section */
    .home {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 50px 8%;
      background: #f5fff5;
    }
    .home .content p {
      font-size: 1.2rem;
      line-height: 1.6;
      max-width: 500px;
      color: #333;
    }
    .home .content h2 {
      font-size: 2rem; color: #1c7430; margin-bottom: 15px;
    }

    /* Buttons */
    .btn {
      background: #1c7430;
      color: #fff;
      padding: 10px 25px;
      border-radius: 30px;
      text-decoration: none;
      font-size: 1rem;
      transition: 0.3s;
    }
    .btn:hover { background: #155724; }

    /* Section Titles */
    .heading {
      text-align: center;
      font-size: 2rem;
      color: #155724;
      margin: 40px 0 20px;
    }

    /* Footer */
    .footer {
      background: #1c7430;
      color: #fff;
      padding: 40px 5%;
    }
    .footer .box-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }
    .footer .box h3 { margin-bottom: 10px; }
    .footer .box a {
      display: block; color: #fff; margin: 5px 0;
      text-decoration: none; font-size: 0.9rem;
    }
    .footer .share a {
      margin: 0 10px; font-size: 1.2rem; color: #ffe57f;
    }
    .credit {
      text-align: center; margin-top: 20px; font-size: 0.9rem;
    }

  </style>
</head>
<body>

<!-- Header -->
<header class="header">
  <div class="header-1">
    <a href="#" class="logo"> <i class="fas fa-book"></i> BookVerse </a>
    <form action="" class="search-form">
      <input type="search" placeholder="Search your book...">
    </form>
  </div>
  <div class="header-2">
    <nav class="navbar">
      <a href="#">Home</a>
      <a href="#category">Category</a>
      <a href="#reviews">Reviews</a>
      <a href="feedback.php">Feedback</a>
    </nav>
  </div>
</header>

<!-- Home -->
<section class="home" id="home">
  <div class="content">
    <h2>Welcome to BookVerse 📚</h2>
    <p>Your one-stop platform for all semester books, guides, and notes. Designed especially for students who want easy access to study material at the best price.</p>
    <a href="#category" class="btn">Explore Books</a>
  </div>
  <div class="image">
    <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/book-2.png" width="280">
  </div>
</section>

<!-- Feedback -->
<section class="newsletter" id="feedback">
  <h1 class="heading">Give Your Feedback</h1>
  <form action="feedback.php" method="post" style="text-align:center;">
    <input type="text" name="username" placeholder="Your Name" class="box" required><br><br>
    <input type="email" name="email" placeholder="Your Email" class="box" required><br><br>
    <textarea name="feedback" placeholder="Write your feedback..." rows="4" style="width:60%; padding:10px; border-radius:10px; border:1px solid #ccc;"></textarea><br><br>
    <input type="submit" value="Submit Feedback" class="btn">
  </form>
</section>

<!-- Footer -->
<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>Quick Links</h3>
      <a href="#">Home</a>
      <a href="#category">Category</a>
      <a href="#reviews">Reviews</a>
      <a href="#feedback">Feedback</a>
    </div>
    <div class="box">
      <h3>Contact Us</h3>
      <a href="#"><i class="fas fa-phone"></i> +91 9876543210</a>
      <a href="#"><i class="fas fa-envelope"></i> support@bookverse.com</a>
    </div>
  </div>
  <div class="share">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkedin"></a>
  </div>
  <div class="credit">© 2024 <b>BookVerse</b> | All Rights Reserved.</div>
</section>

</body>
</html>
