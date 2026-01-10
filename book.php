<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Categories - Booksite</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f0f4f4;
      color: #333;
    }
    header {
     background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
      text-align: center;
      padding: 1rem;
    }
    nav {
  background: linear-gradient(135deg, #2c3e50, #3498db);
  text-align: center;
  padding: 0.8rem;
  
  position: sticky; /* makes the navbar stick */
  top: 0;           /* sticks to the top */
  z-index: 1000;    /* ensures it stays above other elements */
}

nav a {
  color: white;
  text-decoration: none;
  margin: 0 25px;
  font-weight: bold;
}

nav a:hover {
  text-decoration: underline;
}
    h1 {
      text-align: center;
      color: #17252a;
      margin-top: 2rem;
    }

    .category-section {
      padding: 2rem;
    }

    .category {
      margin-bottom: 3rem;
    }
    .category h2 {
      margin-bottom: 1rem;
      color: #0a6eb0ff;
    }
    .books-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
    }
    .book-card {
      background: white;
      padding: 10px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s;
    }
    .book-card:hover {
      transform: scale(1.05);
    }
    .book-card img {
      width: 100%;
      height: 340px;
      object-fit: cover;
      border-radius: 8px;
    }
    .book-card h3 {
      margin-top: 10px;
      font-size: 1rem;
      color: #0f536dff;
    }

    
  </style>
</head>
<body>

<header>
  <h1>Booksite - Categories</h1>
</header>

<nav>
  <a href="index12.php">Home</a>
  <a href="categories.php">Categories</a>
  <a href="book.php">Books</a>
  <a href="novels.php">Novels</a>
  <a href="about1.php">About</a>
</nav>

<div class="category-section">

  <!-- Computer Science -->
  <div class="category">
    <h2>💻 Computer Science</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/c5.jpg" alt="control">
        <h3>Control the Futher</h3>
      </div>
      <div class="book-card">
        <img src="image/Ai1.jpg" alt="Clean Code">
        <h3>Artificial Intelligence</h3>
      </div>
      <div class="book-card">
        <img src="image/cs3.jpg" alt="Java Programming">
        <h3>Java Programming</h3>
      </div>
      <div class="book-card">
        <img src="image/Ro2.jpg" alt="Clean Code">
        <h3> Artificial Intelligence in Robotics </h3>
      </div>
      <div class="book-card">
        <img src="image/d1.jpg" alt="Java Programming">
        <h3>Digital/AI-themed brain</h3>
      </div>
    </div>
  </div>

  <!-- Mathematics -->
  <div class="category">
    <h2>📐 Mathematics</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/r1.jpg" alt="Calculus">
        <h3>Calculus Made Easy</h3>
      </div>
      <div class="book-card">
        <img src="image/s1.jpg" alt="Linear Algebra">
        <h3>Linear Algebra</h3>
      </div>
      <div class="book-card">
        <img src="image/t1.jpg" alt="Discrete Math">
        <h3>Trigonometry: A Complete Introduction</h3>
      </div>
      <div class="book-card">
        <img src="image/gro.jpg" alt="Clean Code">
        <h3> Introduction To Geometry </h3>
      </div>
      <div class="book-card">
        <img src="image/n1.jpg" alt="Java Programming">
        <h3>Number Theory </h3>
      </div>
    </div>
  </div>

  <!-- Science -->
  <div class="category">
    <h2>🔬 Science</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/py11.jpg" alt="Physics Fundamentals">
        <h3>Fundamentals of Physics </h3>
      </div>
      <div class="book-card">
        <img src="image/q11.jpg" alt="Chemistry 101">
        <h3>Quantum Mechanics  </h3>
      </div>
      <div class="book-card">
        <img src="image/c1.jpg" alt="Biology Basics">
        <h3> Chemistry</h3>
      </div>
      <div class="book-card">
        <img src="image/b1.jpg" alt="Clean Code">
        <h3> General Biology </h3>
      </div>
      <div class="book-card">
        <img src="image/bm1.jpg" alt="Java Programming">
        <h3>Biomedical Engineering </h3>
      </div>
    </div>
  </div>

  <!-- Literature -->
  <div class="category">
    <h2>📚 Literature</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/cp1.jpg" alt="Pride and Prejudice">
        <h3>Crime And Punishment</h3>
      </div>
      <div class="book-card">
        <img src="image/tm.jpg" alt="To Kill a Mockingbird">
        <h3>To Kill a Mockingbird</h3>
      </div>
      <div class="book-card">
        <img src="image/dq.jpg" alt="Great Gatsby">
        <h3>Don Quixote</h3>
      </div>
      <div class="book-card">
        <img src="image/w.jpg" alt="Clean Code">
        <h3> War And Peace </h3>
      </div>
      <div class="book-card">
        <img src="image/h1.jpg" alt="Java Programming">
        <h3>Helmet </h3>
      </div>
    </div>
  </div>

  <!-- Business -->
  <div class="category">
    <h2>💼 Business</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/r.jpg" alt="Rich Dad Poor Dad">
        <h3>Rich Dad Poor Dad</h3>
      </div>
      <div class="book-card">
        <img src="image/st1.jpg" alt="Start With Why">
        <h3>Start With Why</h3>
      </div>
      <div class="book-card">
        <img src="image/st.jpg" alt="Lean Startup">
        <h3>The Lean Startup</h3>
      </div>
      <div class="book-card">
        <img src="image/7h.jpg" alt="Clean Code">
        <h3>The 7 Habits of Highly Effective People </h3>
      </div>
      <div class="book-card">
        <img src="image/dr.jpg" alt="Java Programming">
        <h3>Dream with Your Eyes Open</h3>
      </div>
    </div>
  </div>

  <!-- Medical -->
  <div class="category">
    <h2>🏥 Medical</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/gr1.jpg" alt="Gray's Anatomy">
        <h3>Gray's Anatomy</h3>
      </div>
      <div class="book-card">
        <img src="image/mp.jpg" alt="Medical Physiology">
        <h3>Medical Physiology</h3>
      </div>
      <div class="book-card">
        <img src="image/p.jpg" alt="Pharmacology">
        <h3>Pharmacology</h3>
      </div>
      <div class="book-card">
        <img src="image/rp.jpg" alt="Clean Code">
        <h3>Robbins and Cotran Pathologic Basis of Disease </h3>
      </div>
      <div class="book-card">
        <img src="image/dv1.jpg" alt="Java Programming">
        <h3>Davidson’s Principles and Practice of Medicine</h3>
      </div>
    </div>
  </div>

  <!-- History -->
  <div class="category">
    <h2>🏛 History</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/hrr.jpeg" alt="World History">
        <h3>A People’s History of the United States</h3>
      </div>
      <div class="book-card">
        <img src="image/in.jpg" alt="History of India">
        <h3>The Discovery of India</h3>
      </div>
      <div class="book-card">
        <img src="image/mu.jpg" alt="Modern Europe">
        <h3>Modern Europe</h3>
      </div>
      <div class="book-card">
        <img src="image/ai.jpg" alt="Clean Code">
        <h3>Ancient India </h3>
      </div>
      <div class="book-card">
        <img src="image/ski.jpg" alt="Java Programming">
        <h3>The Silk Roads: A New History of the World</h3>
      </div>
    </div>
  </div>

  <!-- Law -->
  <div class="category">
    <h2>⚖ Law</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/ci.png" alt="Constitution of India">
        <h3>Constitution of India</h3>
      </div>
      <div class="book-card">
        <img src="image/cl.jpg" alt="Criminal Law">
        <h3>Criminal Law</h3>
      </div>
      <div class="book-card">
        <img src="image/bl.png" alt="Business Law">
        <h3>Business Law</h3>
      </div>
      <div class="book-card">
        <img src="image/sp.jpg" alt="Clean Code">
        <h3>The Spirit of the Laws </h3>
      </div>
      <div class="book-card">
        <img src="image/le.jpg" alt="Java Programming">
        <h3>Law’s Empire</h3>
      </div>
    </div>
  </div>

  <!-- Arts & Design -->
  <div class="category">
    <h2>🎨 Arts & Design</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/ic.jpg" alt="Graphic Design">
        <h3>Interaction of Color</h3>
      </div>
      <div class="book-card">
        <img src="image/str.jpg" alt="Photography Basics">
        <h3>The Story of Art</h3>
      </div>
      <div class="book-card">
        <img src="image/sl.jpg" alt="Art History">
        <h3>Steal Like an Artist</h3>
      </div>
      <div class="book-card">
        <img src="image/ir.jpg" alt="Clean Code">
        <h3>Indian Art </h3>
      </div>
      <div class="book-card">
        <img src="image/ics.png" alt="Java Programming">
        <h3>Indian Painting: Themes and Traditions</h3>
      </div>
    </div>
  </div>

  <!-- Sports -->
  <div class="category">
    <h2>🏅 Sports</h2>
    <div class="books-grid">
      <div class="book-card">
        <img src="image/fb.jpg" alt="Football Guide">
        <h3>Football Book</h3>
      </div>
      <div class="book-card">
        <img src="image/bs.jpg" alt="Basketball Basics">
        <h3>Basketball Basics</h3>
      </div>
      <div class="book-card">
        <img src="image/y.jpg" alt="Yoga and Fitness">
        <h3>Yoga For everyday Life</h3>
      </div>
      <div class="book-card">
        <img src="image/cg.jpg" alt="Clean Code">
        <h3>The Classic Guide to Cricket </h3>
      </div>
      <div class="book-card">
        <img src="image/ch.jpg" alt="Java Programming">
        <h3>Chess For Beginners</h3>
      </div>
    </div>
  </div>

</div>
<br><br>
<?php include 'footer4.php'; ?>



</body>
</html>
