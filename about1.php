<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - BookVerse</title>
<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #e1f5fe;
    overflow-x: hidden;
    color: #333;
    position: relative;
  }

  /* Floating books animation */
  .floating-book {
    position: absolute;
    width: 40px;
    animation: float 10s linear infinite;
    opacity: 0.7;
  }

  @keyframes float {
    0% { transform: translateY(100vh) rotate(0deg); }
    100% { transform: translateY(-200px) rotate(360deg); }
  }

  header {
    background: #0f4c75;
    color: #e1f5fe;
    padding: 60px 20px;
    text-align: center;
    position: relative;
    z-index: 1;
  }

  header h1 {
    margin: 0;
    font-size: 36px;
    color: #81d4fa;
  }

  header p {
    font-size: 18px;
    color: #e1f5fe;
    margin-top: 10px;
  }

  .about-container {
    max-width: 1100px;
    margin: 40px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    padding: 0 20px;
    position: relative;
    z-index: 1;
  }

  .about-text, .about-image {
    flex: 1;
    min-width: 300px;
    background: rgba(15,76,117,0.05);
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .about-text:hover, .about-image:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.3);
  }

  .about-text h2 {
    color: #0f4c75;
    font-size: 28px;
    margin-bottom: 15px;
  }

  .about-text p {
    color: #333;
    line-height: 1.7;
  }

  .about-image img {
    width: 100%;
    border-radius: 12px;
    display: block;
  }

  .mission, .team {
    margin-top: 40px;
    padding: 0 20px;
    position: relative;
    z-index: 1;
  }

  .mission h2, .team h2 {
    color: #0f4c75;
    font-size: 28px;
    margin-bottom: 20px;
  }

  .team-members {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
  }

  .member {
    background: rgba(15,76,117,0.05);
    border-radius: 15px;
    padding: 20px;
    width: 220px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .member:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.3);
  }

  .member img {
    width: 100px;
    border-radius: 50%;
    margin-bottom: 15px;
  }

  .member h3 {
    color: #0f4c75;
    margin: 10px 0 5px;
  }

  .member p {
    font-size: 14px;
    color: #333;
  }

  /* Glowing particles */
  .particle {
    position: absolute;
    width: 6px;
    height: 6px;
    background: #81d4fa;
    border-radius: 50%;
    opacity: 0.6;
    animation: particleMove 12s linear infinite;
  }

  @keyframes particleMove {
    0% { transform: translateY(100vh); opacity: 0.6; }
    50% { opacity: 1; }
    100% { transform: translateY(-100px); opacity: 0; }
  }

  @media (max-width: 768px) {
    .about-container { flex-direction: column; }
    .team-members { flex-direction: column; align-items: center; }
  }
</style>
</head>
<body>

<!-- Floating books -->
<img src="https://img.icons8.com/ios-filled/50/0f4c75/open-book.png" class="floating-book" style="left: 10%; animation-duration: 12s;">
<img src="https://img.icons8.com/ios-filled/50/0f4c75/open-book.png" class="floating-book" style="left: 40%; animation-duration: 15s;">
<img src="https://img.icons8.com/ios-filled/50/0f4c75/open-book.png" class="floating-book" style="left: 70%; animation-duration: 10s;">

<!-- Glowing particles -->
<div class="particle" style="left:20%; animation-duration: 10s;"></div>
<div class="particle" style="left:50%; animation-duration: 12s;"></div>
<div class="particle" style="left:80%; animation-duration: 14s;"></div>

<header>
  <h1>About Us</h1>
  <p>Discover our story, mission, and the team behind BookVerse</p>
</header>

<div class="about-container">
  <div class="about-text">
    <h2>Our Story</h2>
    <p>BookVerse started with a simple mission: to make reading accessible, enjoyable, and inspiring for everyone. Over the years, we have grown into a vibrant community of book lovers, offering a curated selection of books from all genres, connecting readers with their next favorite story.</p>
  </div>
  <div class="about-image">
    <img src="image/book.jpg" alt="Books">
  </div>
</div>

<div class="mission">
  <h2>Our Mission</h2>
  <p>To ignite a love for reading by providing quality books, personalized recommendations, and a welcoming platform for readers of all ages. We believe in the power of books to educate, inspire, and connect people across the globe.</p>
</div>

<div class="team">
  <h2>Meet Our Team</h2>
  <div class="team-members">
    <div class="member">
      <img src="image/d2.jpg" alt="Team Member">
      <h3>Divyansh Maurya</h3>
      <p><b>Founder & CEO </b></p>
    </div>
    <div class="member">
      <img src="https://img.icons8.com/ios-filled/100/0f4c75/user-female-circle.png" alt="Team Member">
      <h3>Anjali Pandey</h3>
      <p><b>Head of Content</b></p>
    </div>
    <div class="member">
      <img src="image/k1.jpg" alt="Team Member">
      <h3>Krishan Prajapati</h3>
      <p><b>Technical Consultant MS D365</b></p>
    </div>
  </div>
</div>

</body>
</html>
