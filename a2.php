<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Book Portal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Global Styles */
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: Arial, sans-serif; background: linear-gradient(to right, #e8f5e9, #f1fff1); color: #222; }

    /* Header */
    header { background: #2e7d32; color: #fff; padding: 15px 40px; display: flex; justify-content: space-between; align-items: center; }
    header h1 { font-size: 26px; }
    nav a { margin: 0 15px; text-decoration: none; color: #fff; font-weight: bold; transition: 0.3s; }
    nav a:hover { color: #c8e6c9; }

    /* Hero Section */
    .hero { text-align: center; padding: 60px 20px; background: #388e3c; color: white; }
    .hero h2 { font-size: 40px; margin-bottom: 15px; }
    .hero p { font-size: 18px; }

    /* Section Headings */
    .heading { text-align: center; font-size: 28px; margin: 40px 0 20px; color: #2e7d32; }

    /* Categories */
    .categories { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 20px; padding: 20px; }
    .cat-card { background: #fff; padding: 25px; border-radius: 12px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: 0.3s; }
    .cat-card i { font-size: 32px; color: #2e7d32; margin-bottom: 12px; }
    .cat-card:hover { background: #c8e6c9; transform: translateY(-5px); }

    /* Popular Books */
    .books { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; padding: 20px; }
    .book-card { background: #fff; border-radius: 12px; padding: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center; }
    .book-card img { width: 100%; border-radius: 10px; }
    .book-card h3 { margin: 10px 0; color: #2e7d32; }

    /* Feedback Form */
    .feedback { background: #fff; max-width: 600px; margin: 40px auto; padding: 30px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    .feedback h2 { text-align: center; margin-bottom: 20px; color: #2e7d32; }
    .feedback label { display: block; margin: 12px 0 5px; font-weight: bold; }
    .feedback input, .feedback textarea, .feedback select { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 8px; }
    .feedback button { background: #2e7d32; color: #fff; padding: 12px 20px; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; }
    .feedback button:hover { background: #1b5e20; }

    /* Footer */
    footer { background: #2e7d32; color: white; text-align: center; padding: 15px; margin-top: 40px; }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>📚 Student Book Portal</h1>
    <nav>
      <a href="#categories">Categories</a>
      <a href="#books">Books</a>
      <a href="#feedback">Feedback</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h2>Welcome to the Student Book Portal</h2>
    <p>Find resources, explore categories, and share your feedback!</p>
  </section>

  <!-- Categories Section -->
  <h2 class="heading" id="categories">Explore Categories</h2>
  <div class="categories">
    <div class="cat-card"><i class="fas fa-laptop-code"></i><h3>Computer Science</h3></div>
    <div class="cat-card"><i class="fas fa-calculator"></i><h3>Mathematics</h3></div>
    <div class="cat-card"><i class="fas fa-flask"></i><h3>Science</h3></div>
    <div class="cat-card"><i class="fas fa-pen-nib"></i><h3>Literature</h3></div>
    <div class="cat-card"><i class="fas fa-book-medical"></i><h3>Medical</h3></div>
    <div class="cat-card"><i class="fas fa-globe"></i><h3>Geography</h3></div>
    <div class="cat-card"><i class="fas fa-balance-scale"></i><h3>Law</h3></div>
    <div class="cat-card"><i class="fas fa-microchip"></i><h3>Electronics</h3></div>
    <div class="cat-card"><i class="fas fa-robot"></i><h3>Artificial Intelligence</h3></div>
    <div class="cat-card"><i class="fas fa-history"></i><h3>History</h3></div>
    <div class="cat-card"><i class="fas fa-language"></i><h3>Languages</h3></div>
    <div class="cat-card"><i class="fas fa-music"></i><h3>Music</h3></div>
    <div class="cat-card"><i class="fas fa-dumbbell"></i><h3>Sports & Fitness</h3></div>
    <div class="cat-card"><i class="fas fa-seedling"></i><h3>Agriculture</h3></div>
    <div class="cat-card"><i class="fas fa-satellite"></i><h3>Astronomy</h3></div>
    <div class="cat-card"><i class="fas fa-briefcase"></i><h3>Career & Jobs</h3></div>
  </div>

  <!-- Popular Books -->
  <h2 class="heading" id="books">Popular Books</h2>
  <div class="books">
    <div class="book-card">
      <img src="https://covers.openlibrary.org/b/id/8228691-L.jpg" alt="Book">
      <h3>Introduction to Algorithms</h3>
      <p>By Cormen et al. – Best for Computer Science students</p>
    </div>
    <div class="book-card">
      <img src="https://covers.openlibrary.org/b/id/10521258-L.jpg" alt="Book">
      <h3>Concepts of Physics</h3>
      <p>By H.C. Verma – Must-have for Science & Engineering</p>
    </div>
    <div class="book-card">
      <img src="https://covers.openlibrary.org/b/id/240726-L.jpg" alt="Book">
      <h3>Principles of Economics</h3>
      <p>By N. Gregory Mankiw – Great for Business & Economics</p>
    </div>
  </div>

  <!-- Feedback Form -->
  <section class="feedback" id="feedback">
    <h2>Student Feedback</h2>
    <form action="code.php" method="post">
      <label>Username:</label>
      <input type="text" name="user" placeholder="Enter your name" required>
      
      <label>Email:</label>
      <input type="email" name="email" placeholder="Enter your email" required>
      
      <label>Number:</label>
      <input type="text" name="number" placeholder="Enter your number" required>
      
      <label>Category:</label>
      <select name="category">
        <option>Computer Science</option>
        <option>Mathematics</option>
        <option>Science</option>
        <option>Literature</option>
        <option>Medical</option>
        <option>Engineering</option>
        <option>Languages</option>
      </select>
      
      <label>Student's Feedback:</label>
      <textarea name="co" rows="5" placeholder="Write your feedback here..."></textarea>
      
      <button type="submit">Submit Feedback</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Student Book Portal | Designed with ❤️ by Divyansh</p>
  </footer>

</body>
</html>
