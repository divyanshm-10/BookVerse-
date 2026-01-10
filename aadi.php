<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookVerse - Student Book Hub</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Custom CSS -->
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body {
      background: linear-gradient(135deg, #e6ffe6, #ffffff);
      color: #222;
      line-height: 1.6;
    }

    /* Header */
    header {
      background: #1c7430;
      padding: 15px 5%;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    header .logo {
      font-size: 1.6rem;
      font-weight: bold;
      text-decoration: none;
      color: #fff;
    }
    nav a {
      color: #fff;
      margin: 0 12px;
      text-decoration: none;
      font-size: 1rem;
      transition: 0.3s;
    }
    nav a:hover { color: #ffe57f; }

    /* Hero Section */
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 50px 8%;
      background: #f9fff9;
    }
    .hero h1 {
      font-size: 2.5rem;
      color: #155724;
    }
    .hero p {
      max-width: 500px;
      margin: 15px 0;
      color: #333;
    }
    .btn {
      display: inline-block;
      background: #1c7430;
      color: #fff;
      padding: 12px 28px;
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

    /* Categories */
    .categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      padding: 0 8%;
    }
    .cat-card {
      background: #fff;
      border-radius: 12px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: 0.3s;
    }
    .cat-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }
    .cat-card i {
      font-size: 2rem;
      margin-bottom: 12px;
      color: #1c7430;
    }

    /* About Section */
    .about {
      padding: 40px 8%;
      background: #e6ffe6;
      border-radius: 15px;
      margin: 30px 8%;
    }
    .about h2 {
      color: #155724;
      margin-bottom: 15px;
    }

    /* Feedback */
    .feedback {
      padding: 40px 8%;
    }
    .feedback form {
      background: #fff;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: auto;
    }
    .feedback input, .feedback textarea {
      width: 100%;
      margin: 10px 0;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }
    .feedback input[type="submit"] {
      background: #1c7430;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: 0.3s;
    }
    .feedback input[type="submit"]:hover { background: #155724; }

    /* Footer */
    footer {
      background: #1c7430;
      color: #fff;
      padding: 30px 5%;
      text-align: center;
      margin-top: 40px;
    }
    footer a {
      color: #ffe57f;
      margin: 0 8px;
      text-decoration: none;
    }
  </style>
</head>
<body>

<!-- Header -->
<header>
  <a href="#" class="logo"><i class="fas fa-book"></i> BookVerse</a>
  <nav>
    <a href="#">Home</a>
    <a href="#categories">Categories</a>
    <a href="#about">About</a>
    <a href="#feedback">Feedback</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<!-- Hero -->
<section class="hero">
  <div>
    <h1>Welcome to BookVerse 📚</h1>
    <p>A modern student-friendly platform for accessing semester books, guides, and study notes at one place.</p>
    <a href="#categories" class="btn">Explore Now</a>
  </div>
  <img src="https://cdn-icons-png.flaticon.com/512/2991/2991139.png" width="300">
</section>

<!-- Categories -->
<h2 class="heading" id="categories">Book Categories</h2>
<div class="categories">
  <div class="cat-card"><i class="fas fa-laptop-code"></i><h3>Computer Science</h3></div>
  <div class="cat-card"><i class="fas fa-calculator"></i><h3>Mathematics</h3></div>
  <div class="cat-card"><i class="fas fa-flask"></i><h3>Science</h3></div>
  <div class="cat-card"><i class="fas fa-pen-nib"></i><h3>Literature</h3></div>
  <div class="cat-card"><i class="fas fa-business-time"></i><h3>Business</h3></div>
</div>

<!-- About -->
<section class="about" id="about">
  <h2>About Us</h2>
  <p>BookVerse is designed to help students easily access study resources in one place. 
  From textbooks to handwritten notes, our mission is to make learning simpler, smarter, and more affordable.</p>
</section>

<!-- Feedback -->
<section class="feedback" id="feedback">
  <h2 class="heading">Student Feedback</h2>
  <form action="feedback.php" method="POST">
    <input type="text" name="username" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="text" name="number" placeholder="Your Number" required>
    <textarea name="feedback" rows="4" placeholder="Write your feedback..." required></textarea>
    <input type="submit" value="Submit Feedback">
  </form>
</section>

<!-- Footer -->
<footer id="contact">
  <p>📞 Contact: +91 9876543210 | 📧 support@bookverse.com</p>
  <p>Follow us: 
    <a href="#"><i class="fab fa-facebook"></i></a> 
    <a href="#"><i class="fab fa-instagram"></i></a> 
    <a href="#"><i class="fab fa-linkedin"></i></a>
  </p>
  <p>© 2024 BookVerse | All Rights Reserved.</p>
</footer>

</body>
</html>
