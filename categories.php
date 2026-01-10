<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booksite - Categories</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background: linear-gradient(135deg, #e3f2fd, #fce4ec);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Header */
    header {
     background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    header .logo {
      font-size: 24px;
      font-weight: bold;
      display: flex;
      align-items: center;
    }
    header .logo i {
      margin-right: 10px;
      font-size: 28px;
    }
    header .search-box {
      flex: 1;
      text-align: center;
    }
    header .search-box input {
      width: 50%;
      padding: 8px 12px;
      border: none;
      border-radius: 20px;
      outline: none;
      font-size: 15px;
    }

    /* User Dropdown */
    .user {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }
    .user i {
      font-size: 26px;
      margin-right: 5px;
    }
    .user span {
      font-size: 16px;
      font-weight: 500;
    }
    .dropdown {
      display: none;
      position: absolute;
      right: 0;
      background: white;
      min-width: 160px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
      border-radius: 8px;
      overflow: hidden;
    }
    .dropdown a {
      display: block;
      padding: 10px 15px;
      text-decoration: none;
      color: #333;
      transition: background 0.3s;
    }
    .dropdown a:hover {
      background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
    }
    .user:hover .dropdown {
      display: block;
    }

    /* Navbar */
    nav {
      background: linear-gradient(135deg, #3d83c8ff, #3f6178ff);
      padding: 12px 30px;
      text-align: center;
    }
    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }
    nav a:hover {
      color: #ffd700;
    }

    /* Categories Section */
    .categories {
      flex: 1;
      padding: 50px 40px;
      text-align: center;
    }
    .categories h1 {
      font-size: 32px;
      margin-bottom: 30px;
      color: #2c3e50;
    }
    .cat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
    }
    .cat-card {
      background: white;
      border-radius: 15px;
      padding: 30px 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s, background 0.3s;
      cursor: pointer;
    }
    .cat-card:hover {
      transform: translateY(-5px);
      background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
    }
    .cat-card i {
      font-size: 40px;
      margin-bottom: 15px;
      color: #07395bff;
      transition: color 0.3s;
    }
    .cat-card:hover i {
      color: #ffd700;
    }
    .cat-card h3 {
      margin-top: 10px;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="logo"><i class="fas fa-book"></i> Booksite</div>
    <div class="search-box">
      <input type="text" placeholder="Search books, categories...">
    </div>
    <div class="user">
      <i class="fas fa-user-circle"></i><span>Guest</span>
      <div class="dropdown">
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="profile.php">Profile</a>
      </div>
    </div>
  </header>

  <!-- Navbar -->
  <nav>
    <a href="index12.php">Home</a>
    <a href="categories.php">Categories</a>
    <a href="book.php">Books</a>
  </nav>

  <!-- Categories Section -->
  <section class="categories">
    <h1>📖 Book Categories</h1>
    <div class="cat-grid">
      <div class="cat-card"><i class="fas fa-laptop-code"></i><h3>Computer Science</h3></div>
      <div class="cat-card"><i class="fas fa-square-root-alt"></i><h3>Mathematics</h3></div>
      <div class="cat-card"><i class="fas fa-flask"></i><h3>Science</h3></div>
      <div class="cat-card"><i class="fas fa-book-open"></i><h3>Literature</h3></div>
      <div class="cat-card"><i class="fas fa-chart-line"></i><h3>Business</h3></div>
      <div class="cat-card"><i class="fas fa-user-md"></i><h3>Medical</h3></div>
      <div class="cat-card"><i class="fas fa-landmark"></i><h3>History</h3></div>
      <div class="cat-card"><i class="fas fa-balance-scale"></i><h3>Law</h3></div>
      <div class="cat-card"><i class="fas fa-paint-brush"></i><h3>Arts & Design</h3></div>
      <div class="cat-card"><i class="fas fa-futbol"></i><h3>Sports</h3></div>
    </div>
  </section>

  <?php include 'footer4.php'; ?>
</body>
</html>
