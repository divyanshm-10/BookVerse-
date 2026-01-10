<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Book Site</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #e8f5e9, #ffffff);
      color: #333;
    }
    header {
    background: #118fbcff;
    color: white;
    height: 70px;               /* reasonable height */
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 40px;            /* space on left and right */
    position: fixed;             /* fixed at top */
    top: 0;
    left: 0;
    z-index: 1000;
    box-sizing: border-box;
}

header span {
    font-size: 28px;
    font-weight: 900;
}

nav {
    display: flex;
    gap: 25px;                   /* space between links */
}

nav a {
    color: white;
    text-decoration: none;
    font-weight: 500;
}

nav a:hover {
    text-decoration: underline;
}

/* Responsive for smaller screens */
@media (max-width: 768px) {
    header {
        flex-direction: column;
        height: auto;
        padding: 15px 20px;
    }

    nav {
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
        margin-top: 10px;
    }
}

    header h1 { font-size: 26px; }
    nav a {
      color: white;
      margin: 0 20px;
      text-decoration: none;
      font-weight: 500;
    }
    nav a:hover { text-decoration: underline; }

   .hero {
    text-align: center;
    padding: 150px 20px; /* increase height so image shows more */
    background: linear-gradient(rgba(40, 137, 201, 0.6), rgba(89, 118, 90, 0.6)),
                url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f') no-repeat center center;
    background-size: 120%; /* increase size to make image larger / zoomed */
    color: white;
}

.hero h2 {
    font-size: 50px; /* optional: increase text size too */
    margin-bottom: 20px;
}

.hero p {
    font-size: 20px;
}


    .heading {
      text-align: center;
      margin: 40px 0 20px;
      font-size: 28px;
      color: #35a4bcff;
    }

    .categories, .books {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      padding: 20px 40px;
    }
    .cat-card, .book-card {
      background: white;
      border-radius: 12px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    .cat-card:hover, .book-card:hover { transform: scale(1.05); }
    .cat-card i {
      font-size: 32px;
      margin-bottom: 10px;
      color: #2ba2baff;
    }
    .book-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 12px;
    }
    .book-card h3 { font-size: 18px; margin-bottom: 8px; }
    .book-card p { font-size: 14px; color: #666; }

    

    footer {
      background: #2e7d32;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 20px;
    }
    /* Feedback section */
        .feedback {
            position: relative;
            /* keeps floating icons inside */
            overflow: hidden;
            background: linear-gradient(135deg, #f5f7fa, #c3d9ec);
            padding: 50px;
            border-radius: 15px;
            max-width: 600px;
            margin: 50px auto;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 1;
        }

        .feedback h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2e6296;
        }

        .feedback form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 1;
            position: relative;
        }

        .feedback input,
        .feedback select,
        .feedback textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            width: 100%;
        }

        .feedback button {
            background: #2e6296;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .feedback button:hover {
            background: #1d456a;
        }

        

  </style>
</head>
<body>
  
  <!-- Loader -->
        <?php include 'loader2.php'; ?>  
<script>document.body.style.overflow = "auto";</script> 
  <!-- Header -->
  <header>
    <span>📚 Student Book Site</span>
    <nav>
        <a href="index12.php">Home</a>
        <a href="categories.php">Categories</a>
        <a href="book.php">Books</a>
        <a href="feedback1.php">Feedback</a>
    </nav>
</header>


  <!-- Hero -->
  <section class="hero" id="home">
    <h2>Welcome to the Student Book Hub</h2>
    <p>Find all academic and professional books in one place</p>
  </section>
  

    

  <!-- Categories -->
  <h2 class="heading" id="categories">Book Categories</h2>
  <div class="categories">
    <div class="cat-card"><i class="fas fa-laptop-code"></i><h3>Computer Science</h3></div>
    <div class="cat-card"><i class="fas fa-calculator"></i><h3>Mathematics</h3></div>
    <div class="cat-card"><i class="fas fa-flask"></i><h3>Science</h3></div>
    <div class="cat-card"><i class="fas fa-pen-nib"></i><h3>Literature</h3></div>
    <div class="cat-card"><i class="fas fa-business-time"></i><h3>Business</h3></div>
    <div class="cat-card"><i class="fas fa-globe"></i><h3>Geography</h3></div>
    <div class="cat-card"><i class="fas fa-book-medical"></i><h3>Medical</h3></div>
    <div class="cat-card"><i class="fas fa-balance-scale"></i><h3>Law</h3></div>
    <div class="cat-card"><i class="fas fa-music"></i><h3>Music</h3></div>
    <div class="cat-card"><i class="fas fa-robot"></i><h3>AI & Robotics</h3></div>
    <div class="cat-card"><i class="fas fa-dumbbell"></i><h3>Sports</h3></div>
    <div class="cat-card"><i class="fas fa-history"></i><h3>History</h3></div>
    <div class="cat-card"><i class="fas fa-satellite"></i><h3>Astronomy</h3></div>
    <div class="cat-card"><i class="fas fa-language"></i><h3>Languages</h3></div>
  </div>

  <!-- Featured Books -->
  <h2 class="heading" id="books">Featured Books</h2>
  <div class="books">
    <div class="book-card">
      <img src="https://images-na.ssl-images-amazon.com/images/I/51N-u8AsmdL._SX376_BO1,204,203,200_.jpg" alt="Book">
      <h3>Introduction to Algorithms</h3>
      <p>Computer Science • By Cormen</p>
    </div>
    <div class="book-card">
      <img src="https://m.media-amazon.com/images/I/71kxa1-0mfL.jpg" alt="Book">
      <h3>Mathematics for Engineers</h3>
      <p>Mathematics • By Grewal</p>
    </div>
    <div class="book-card">
      <img src="https://m.media-amazon.com/images/I/81iqZ2HHD-L.jpg" alt="Book">
      <h3>Harry Potter Series</h3>
      <p>Literature • By J.K. Rowling</p>
    </div>
    <div class="book-card">
      <img src="https://m.media-amazon.com/images/I/91uwocAMtSL.jpg" alt="Book">
      <h3>Principles of Economics</h3>
      <p>Economics • By N. Gregory Mankiw</p>
    </div>
  </div>

  <!-- Feedback -->
   <div>
  <section class="feedback" id="feedback">
        <h2 class="heading">Student Feedback</h2>
        <form action="code.php" method="POST">
            <input type="text" name="user" placeholder="Enter your Name" required>
            <input type="email" name="email" placeholder="Enter your Email" required>
            <input type="text" name="number" placeholder="Enter your Number" required>
            <select name="category" required>
                <option value="">Select Book Category</option>
                <option>Computer Science</option>
                <option>Mathematics</option>
                <option>Science</option>
                <option>Literature</option>
                <option>Business</option>
            </select>
            <textarea name="co" rows="4" placeholder="Write your feedback..." required></textarea>
            <button type="submit">Submit Feedback</button>
            </form>
  </section>
    <?php include 'footer8.php'; ?>

</body>
</html>
