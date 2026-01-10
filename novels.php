<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novels - Booksite</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #fdfdfd, #f4f9f9);
      color: #333;
    }
    header {
      background: linear-gradient(135deg, #2c3e50, #3498db);/* dim sky blue */
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }
    nav {
  background: linear-gradient(135deg, #2c3e50, #3498db); /* dim sky blue */
  padding: 0.8rem;
  text-align: center;

  position: sticky; /* makes the navbar stick */
  top: 0;           /* stick to the top */
  z-index: 1000;    /* stays above other content */
}

nav a {
  margin: 0 25px;
  text-decoration: none;
  color: white;
  font-weight: bold;
}

    /* Popular Novels Section */
    .novel-section {
      padding: 2rem;
    }
    .novel-section h1 {
      text-align: center;
      margin-bottom: 2rem;
      color: #136babff;
    }
    .novel-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }
    .novel-card {
      background: white;
      border-radius: 12px;
      padding: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.2s;
    }
    .novel-card:hover {
      transform: scale(1.05);
    }
    .novel-card img {
      width: 100%;
      border-radius: 8px;
      height: 300px;
      object-fit: cover;
    }
    .novel-card h3 {
      margin-top: 10px;
      color: #0c77a2ff;
    }

    /* Motivation Section */
    .motivation {
     background: linear-gradient(135deg, #2c3e50, #3498db);/* dim sky blue */
      color: white;
      padding: 3rem 2rem;
      text-align: center;
      margin: 2rem 0;
      border-radius: 12px;
      animation: fadeIn 2s ease-in-out;
    }
    .motivation h2 {
      margin-bottom: 1rem;
      font-size: 2rem;
    }
    .motivation p {
      font-size: 1.2rem;
      line-height: 1.6;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

   
  </style>
</head>
<body>
  <header>
    <h1>Booksite - Novels</h1>
  </header>

  <nav>
    <a href="index12.php">Home</a>
    <a href="categories.php">Categories</a>
    <a href="book.php">Books</a>
    <a href="novels.php">Novels</a>
    <a href="about1.php">About</a>
  </nav>

  <!-- Motivation Section -->
  <section class="motivation">
    <h2>💡 Read More, Grow More</h2>
    <p id="quote">Loading inspiration...</p>
  </section>

  <!-- Popular Novels Section -->
  <section class="novel-section">
    <h1>📚 Popular Novels</h1>
    <div class="novel-grid">
      <div class="novel-card">
        <img src="image/a1.JPG" alt="Novel 1">
        <h3>Pride and Prejudice</h3>
      </div>
      <div class="novel-card">
        <img src="image/aa2.jpg" alt="Novel 2">
        <h3>To Kill a Mockingbird</h3>
      </div>
      <div class="novel-card">
        <img src="image/a3.jpg" alt="Novel 3">
        <h3>The Great Gatsby</h3>
      </div>
      <div class="novel-card">
        <img src="image/a4.jpg" alt="Novel 4">
        <h3>1984</h3>
      </div>
      <div class="novel-card">
        <img src="image/a5.jpg" alt="Novel 5">
        <h3>Harry Potter</h3>
      </div>
      <div class="novel-card">
        <img src="image/a6.jpg" alt="Novel 6">
        <h3>The Hobbit</h3>
      </div>
    </div>
  </section>

  <?php include 'footer4.php'; ?>

  <!-- Dynamic Motivation Quotes Script -->
  <script>
    const quotes = [
      `"A reader lives a thousand lives before he dies. The man who never reads lives only one." – George R.R. Martin`,
      `"Books are a uniquely portable magic." – Stephen King`,
      `"The more that you read, the more things you will know." – Dr. Seuss`,
      `"Once you learn to read, you will be forever free." – Frederick Douglass`,
      `"A room without books is like a body without a soul." – Marcus Tullius Cicero`
    ];

    document.getElementById("quote").innerText = quotes[Math.floor(Math.random() * quotes.length)];
  </script>
</body>
</html>
