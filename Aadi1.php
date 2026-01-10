<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Feedback & Book Categories</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #4CAF50 50%, #ffffff 50%);
      min-height: 100vh;
    }

    header {
      text-align: center;
      padding: 20px;
      background: rgba(0,0,0,0.6);
      color: #fff;
    }

    .container {
      width: 90%;
      max-width: 1100px;
      margin: 30px auto;
      background: #fff;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    h2.heading {
      text-align: center;
      margin-bottom: 20px;
      color: #4CAF50;
    }

    /* Feedback Form */
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: bold;
      color: #333;
    }

    input, textarea, select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      width: 100%;
      font-size: 15px;
    }

    textarea {
      resize: none;
      height: 120px;
    }

    button {
      padding: 12px;
      border: none;
      background: #4CAF50;
      color: #fff;
      font-size: 16px;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #388E3C;
    }

    /* Categories Section */
    .categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      margin-top: 25px;
    }

    .cat-card {
      background: #f5f5f5;
      padding: 20px;
      text-align: center;
      border-radius: 12px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .cat-card i {
      font-size: 35px;
      color: #4CAF50;
      margin-bottom: 10px;
    }

    .cat-card h3 {
      font-size: 16px;
      color: #333;
    }

    .cat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      background: #e8f5e9;
    }
  </style>
</head>
<body>

  <header>
    <h1>📚 Student Feedback & Book Categories</h1>
  </header>

  <div class="container">
    <!-- Feedback Form -->
    <h2 class="heading">Student Feedback</h2>
    <form action="code.php" method="POST">
      <label for="user">Username</label>
      <input type="text" name="user" id="user" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>

      <label for="number">Number</label>
      <input type="text" name="number" id="number" required>

      <label for="feedback">Student's Feedback</label>
      <textarea name="co" id="feedback" placeholder="Write your feedback here..." required></textarea>

      <label for="rating">Rate Us</label>
      <select name="rating" id="rating" required>
        <option value="">--Select--</option>
        <option value="Excellent">🌟 Excellent</option>
        <option value="Good">👍 Good</option>
        <option value="Average">👌 Average</option>
        <option value="Poor">👎 Poor</option>
      </select>

      <button type="submit">Submit Feedback</button>
    </form>
  </div>

  <div class="container">
    <!-- Categories Section -->
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
      <div class="cat-card"><i class="fas fa-paint-brush"></i><h3>Arts & Design</h3></div>
      <div class="cat-card"><i class="fas fa-microchip"></i><h3>Electronics</h3></div>
      <div class="cat-card"><i class="fas fa-robot"></i><h3>Artificial Intelligence</h3></div>
      <div class="cat-card"><i class="fas fa-chart-line"></i><h3>Economics</h3></div>
      <div class="cat-card"><i class="fas fa-language"></i><h3>Languages</h3></div>
      <div class="cat-card"><i class="fas fa-music"></i><h3>Music</h3></div>
      <div class="cat-card"><i class="fas fa-dumbbell"></i><h3>Sports & Fitness</h3></div>
      <div class="cat-card"><i class="fas fa-seedling"></i><h3>Agriculture</h3></div>
      <div class="cat-card"><i class="fas fa-history"></i><h3>History</h3></div>
      <div class="cat-card"><i class="fas fa-satellite"></i><h3>Astronomy</h3></div>
      <div class="cat-card"><i class="fas fa-user-graduate"></i><h3>Exams & Entrance</h3></div>
      <div class="cat-card"><i class="fas fa-briefcase"></i><h3>Career & Jobs</h3></div>
    </div>
  </div>

</body>
</html>
