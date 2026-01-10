<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Portal - Feedback & Books</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #6dd5ed, #2193b0, #b2fefa, #0ed2f7);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      min-height: 100vh;
      color: #333;
    }
    @keyframes gradientBG {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }
    header {
      text-align: center;
      padding: 20px;
      background: rgba(0,0,0,0.6);
      color: #fff;
      font-size: 22px;
      font-weight: bold;
      letter-spacing: 1px;
    }
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 30px auto;
      background: #ffffffdd;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    h2.section-title {
      text-align: center;
      margin-bottom: 20px;
      font-size: 26px;
      color: #1b5e20;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    label {
      font-weight: bold;
      margin-bottom: 5px;
      color: #444;
    }
    input, textarea, select {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 10px;
      width: 100%;
      font-size: 15px;
      transition: 0.3s;
    }
    input:focus, textarea:focus, select:focus {
      border-color: #2193b0;
      box-shadow: 0 0 6px rgba(33,147,176,0.6);
      outline: none;
    }
    textarea {
      resize: none;
      height: 120px;
    }
    button {
      padding: 14px;
      border: none;
      background: linear-gradient(135deg, #43e97b, #38f9d7);
      color: #fff;
      font-size: 17px;
      font-weight: bold;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: linear-gradient(135deg, #11998e, #38ef7d);
      transform: scale(1.05);
    }
    .categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      margin-top: 25px;
    }
    .cat-card {
      background: #f5f5f5;
      padding: 25px 15px;
      text-align: center;
      border-radius: 12px;
      transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s;
    }
    .cat-card i {
      font-size: 40px;
      color: #2193b0;
      margin-bottom: 12px;
    }
    .cat-card h3 {
      font-size: 17px;
      color: #333;
      font-weight: bold;
    }
    .cat-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
      background: #e0f7fa;
    }
    footer {
      text-align: center;
      padding: 15px;
      margin-top: 30px;
      color: #fff;
      background: rgba(0,0,0,0.6);
      font-size: 14px;
    }
  </style>
</head>
<body>

  <header>📚 Student Portal - Feedback & Book Categories</header>

  <!-- Feedback Section -->
  <div class="container">
    <h2 class="section-title">Student Feedback</h2>
    <form action="code.php" method="POST">
      <label for="user">👤 Username</label>
      <input type="text" name="user" id="user" placeholder="Enter your name" required>

      <label for="email">📧 Email</label>
      <input type="email" name="email" id="email" placeholder="Enter your email" required>

      <label for="number">📱 Phone Number</label>
      <input type="text" name="number" id="number" placeholder="Enter your phone number" required>

      <label for="gender">⚧ Gender</label>
      <select name="gender" id="gender" required>
        <option value="">--Select--</option>
        <option value="Male">♂ Male</option>
        <option value="Female">♀ Female</option>
        <option value="Other">⚧ Other</option>
      </select>

      <label for="course">🎓 Course / Department</label>
      <select name="course" id="course" required>
        <option value="">--Select--</option>
        <option value="CSE">Computer Science & Engineering</option>
        <option value="IT">Information Technology</option>
        <option value="ECE">Electronics & Communication</option>
        <option value="ME">Mechanical Engineering</option>
        <option value="CE">Civil Engineering</option>
        <option value="MBA">MBA</option>
        <option value="Other">Other</option>
      </select>

      <label for="year">📅 Year of Study</label>
      <select name="year" id="year" required>
        <option value="">--Select--</option>
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
        <option value="4th Year">4th Year</option>
        <option value="PG">Post Graduate</option>
      </select>

      <label for="feedback">💬 Student's Feedback</label>
      <textarea name="feedback" id="feedback" placeholder="Write your feedback here..." required></textarea>

      <label for="suggestion">💡 Any Suggestions?</label>
      <textarea name="suggestion" id="suggestion" placeholder="Write your suggestions..."></textarea>

      <label for="rating">⭐ Rate Us</label>
      <select name="rating" id="rating" required>
        <option value="">--Select--</option>
        <option value="Excellent">🌟 Excellent</option>
        <option value="Good">👍 Good</option>
        <option value="Average">👌 Average</option>
        <option value="Poor">👎 Poor</option>
      </select>

      <label>
        <input type="checkbox" name="recommend" value="Yes"> ✅ Would you recommend us to a friend?
      </label>

      <button type="submit">Submit Feedback</button>
    </form>
  </div>

  <!-- Categories Section -->
  <div class="container">
    <h2 class="section-title">Book Categories</h2>
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
      <div class="cat-card"><i class="fas fa-tree"></i><h3>Environmental Studies</h3></div>
      <div class="cat-card"><i class="fas fa-code-branch"></i><h3>Software Development</h3></div>
      <div class="cat-card"><i class="fas fa-book-open"></i><h3>General Knowledge</h3></div>
      <div class="cat-card"><i class="fas fa-hand-holding-heart"></i><h3>Psychology</h3></div>
    </div>
  </div>

  <footer>© 2025 Student Portal | Designed with ❤️ for Learning</footer>

</body>
</html>
