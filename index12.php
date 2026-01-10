<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Bookstore</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {margin:0; padding:0; box-sizing:border-box; font-family: 'Segoe UI', sans-serif;}

    body {
      background: #f3f7f9;
      color: #333;
    }

    /* Header */
    header {
      background: linear-gradient(135deg, #2c3e50, #3498db);
      padding: 15px 40px;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header h1 {
      font-size: 26px;
      font-weight: bold;
    }
    nav a {
      color: white;
      margin-left: 25px;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }
    nav a:hover {
      color: #ffd700;
    }

    /* Hero Section */
    .hero {
      background: url('https://images.unsplash.com/photo-1512820790803-83ca734da794') no-repeat center/cover;
      height: 60vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      padding: 20px;
    }
    .hero h2 {
      font-size: 50px;
      text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
    }
    .hero p {
      font-size: 20px;
      margin-top: 10px;
      text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
    }

    /* Categories */
    .categories {
      padding: 50px 40px;
      background: white;
    }
    .categories h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      color: #2c3e50;
    }
    .cat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
    }
    .cat-card {
      background: #ecf0f1;
      padding: 25px;
      border-radius: 12px;
      text-align: center;
      transition: transform 0.3s, background 0.3s;
      cursor: pointer;
    }
    .cat-card:hover {
      background: #3498db;
      color: white;
      transform: translateY(-5px);
    }
    .cat-card i {
      font-size: 35px;
      margin-bottom: 10px;
    }

    /* Novels Section */
    .novels {
      padding: 50px 40px;
      background: #f9f9f9;
    }
    .novels h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      color: #2c3e50;
    }
    .book-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 25px;
    }
    .book-card {
      background: white;
      padding: 15px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    .book-card:hover {
      transform: scale(1.05);
    }
    .book-card img {
      width: 100%;
      height: 280px;
      object-fit: cover;
      border-radius: 8px;
    }
    .book-card h3 {
      margin-top: 12px;
      font-size: 18px;
      color: #333;
    }

  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>📚 My Bookstore</h1>
    <nav>
      <a href="a3.php">Home</a>
      <a href="categories.php">Categories</a>
      <a href="novels.php">Novels</a>
      <a href="about1.php">About</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div>
      <h2>Welcome to My Bookstore</h2>
      <p>Explore thousands of books, novels, and study materials at one place</p>
    </div>
  </section>

  <!-- Categories -->
  <section class="categories">
    <h2>Book Categories</h2>
    <div class="cat-grid">
      <div class="cat-card"><i class="fas fa-book"></i><h3>Novels</h3></div>
      <div class="cat-card"><i class="fas fa-flask"></i><h3>Science</h3></div>
      <div class="cat-card"><i class="fas fa-landmark"></i><h3>History</h3></div>
      <div class="cat-card"><i class="fas fa-laptop-code"></i><h3>Technology</h3></div>
      <div class="cat-card"><i class="fas fa-language"></i><h3>Languages</h3></div>
      <div class="cat-card"><i class="fas fa-music"></i><h3>Music</h3></div>
    </div>
  </section>

  <!-- Novels -->
  <section class="novels">
    <h2>Popular Novels</h2>
    <div class="book-grid">
      <div class="book-card">
        <img src="https://covers.openlibrary.org/b/id/7222246-L.jpg" alt="Novel 1">
        <h3>Pride and Prejudice</h3>
      </div>
      <div class="book-card">
        <img src="https://covers.openlibrary.org/b/id/8231856-L.jpg" alt="Novel 2">
        <h3>To Kill a Mockingbird</h3>
      </div>
      <div class="book-card">
        <img src="https://covers.openlibrary.org/b/id/240727-L.jpg" alt="Novel 3">
        <h3>The Great Gatsby</h3>
      </div>
      <div class="book-card">
        <img src="image/a5.jpg" alt="Novel 4">
        <h3>Harry Potter</h3>
      </div>
    </div>
  </section>

<?php include 'footer8.php'; ?>
  

</body>
</html>
