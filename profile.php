<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - Booksite</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background: linear-gradient(135deg, #e8f5e9, #e3f2fd);
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
    .profile-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .profile-box {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      width: 400px;
      text-align: center;
    }
    .profile-box img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 15px;
    }
    .profile-box h2 {
      color: #10476cff;
      margin-bottom: 10px;
    }
    .profile-box p {
      margin: 5px 0;
    }
   
  </style>
</head>
<body>
  <header>Booksite - Profile</header>
  <br><br>
  <div class="profile-container">
    <div class="profile-box">
      <img src="https://via.placeholder.com/100" alt="User Profile">
      <h2>Guest User</h2>
      <p><strong>Email:</strong> guest@example.com</p>
      <p><strong>Member Since:</strong> 2025</p>
      <button onclick="location.href='login.php'" style="margin-top:15px; padding:10px 20px; border:none; background:#10476cff; color:white; border-radius:8px; cursor:pointer;">Logout</button>
    </div>
  </div>
  <br><br>
  <?php include 'footer4.php'; ?>
</body>
</html>
