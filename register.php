<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Booksite</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background: linear-gradient(135deg, #fce4ec, #e3f2fd);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    header {
      background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
      padding: 15px 40px;
      font-size: 24px;
      font-weight: bold;
    }
    .form-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .form-box {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      width: 350px;
      text-align: center;
    }
    .form-box h2 {
      margin-bottom: 20px;
      color: #1a4b6cff;
    }
    .form-box input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    .form-box button {
      width: 100%;
      padding: 10px;
       background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }
    .form-box button:hover {
      background: #2c3e50;
    }
  </style>
</head>
<body>
  <header>Booksite - Register</header>
  <br><br>
  <div class="form-container">
    <div class="form-box">
      <h2>Create Account</h2>
      <form>
        <input type="text" placeholder="Full Name" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <input type="password" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
      </form>
      <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
  </div>
  <br>
  <br>
  <?php include 'footer4.php'; ?>
</body>
</html>
