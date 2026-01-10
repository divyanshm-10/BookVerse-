<?php
// a3.php main page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookVerse - Home</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #e6f4f9;
      overflow: hidden; /* hide scroll until loaded */
    }

    /* Loader Overlay */
    #loader {
      position: fixed;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at top left, #d9f0ff, #0f4c75);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      z-index: 9999;
      color: white;
      overflow: hidden;
    }

    /* Floating particles */
    .particle {
      position: absolute;
      border-radius: 50%;
      background: rgba(255,255,255,0.4);
      animation: float 10s infinite;
    }
    .particle:nth-child(1) { width: 15px; height: 15px; top: 20%; left: 25%; animation-duration: 12s; }
    .particle:nth-child(2) { width: 10px; height: 10px; top: 60%; left: 70%; animation-duration: 8s; }
    .particle:nth-child(3) { width: 20px; height: 20px; top: 40%; left: 50%; animation-duration: 14s; }
    .particle:nth-child(4) { width: 12px; height: 12px; top: 75%; left: 30%; animation-duration: 11s; }

    @keyframes float {
      0% { transform: translateY(0) scale(1); opacity: 0.8; }
      50% { transform: translateY(-40px) scale(1.2); opacity: 0.5; }
      100% { transform: translateY(0) scale(1); opacity: 0.8; }
    }

    /* Animated Book */
    .book {
      position: relative;
      width: 80px;
      height: 60px;
      perspective: 600px;
    }

    .page {
      position: absolute;
      width: 100%;
      height: 100%;
      background: white;
      border-radius: 5px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      animation: flip 1.5s infinite;
      transform-origin: left;
    }

    .page:nth-child(1) { animation-delay: 0s; }
    .page:nth-child(2) { animation-delay: 0.5s; }
    .page:nth-child(3) { animation-delay: 1s; }

    @keyframes flip {
      0%   { transform: rotateY(0); }
      50%  { transform: rotateY(-180deg); }
      100% { transform: rotateY(-180deg); }
    }

    /* Loading text */
    .loading-text {
      margin-top: 20px;
      font-size: 22px;
      font-weight: bold;
      letter-spacing: 2px;
      animation: blink 1.5s infinite;
    }

    @keyframes blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.5; }
    }

    /* Main Page Content */
    #content {
      display: none;
      animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }

    header {
      background: linear-gradient(135deg, #0f4c75, #3282b8);
      color: #fff;
      padding: 50px;
      text-align: center;
      border-bottom-left-radius: 40px;
      border-bottom-right-radius: 40px;
    }

    header h1 {
      margin: 0;
      font-size: 40px;
    }

    header p {
      margin-top: 10px;
      font-size: 18px;
      opacity: 0.9;
    }
  </style>
</head>
<body>

<!-- Loader -->
<div id="loader">
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>

  <div class="book">
    <div class="page"></div>
    <div class="page"></div>
    <div class="page"></div>
  </div>
  <div class="loading-text">Loading BookVerse...</div>
</div>

<!-- Main Content -->
<div id="content">
  <header>
    <h1>Welcome to BookVerse</h1>
    <p>Your digital library of knowledge & imagination</p>
  </header>

  <main style="padding:40px;text-align:center;">
    <h2>Explore Our Collection</h2>
    <p>Find your next read among thousands of books.</p>
  </main>
</div>

<script>
  // Hide loader when full page loads
  window.addEventListener("load", function() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("content").style.display = "block";
    document.body.style.overflow = "auto"; // allow scroll
  });
</script>

</body>
</html>
