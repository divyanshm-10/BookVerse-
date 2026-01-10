<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booksite - Feedback</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="index12.php">Home</a>
    <a href="categories.php">Categories</a>
    <a href="books.php">Books</a>
    <a href="feedback.php">Feedback</a>
  </nav>

  <section class="feedback">
    <h1>💬 Student Feedback</h1>
    <form action="code.php" method="POST">
      <label>Username</label>
      <input type="text" name="user" required>
      <label>Email</label>
      <input type="email" name="email" required>
      <label>Number</label>
      <input type="text" name="number" required>
      <label>Feedback</label>
      <textarea name="co" required></textarea>
      <button type="submit">Submit</button>
    </form>
  </section>
</body>
</html>
