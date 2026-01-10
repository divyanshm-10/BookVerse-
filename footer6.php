<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cinematic Bookstore Footer</title>
<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #121212;
    overflow-x: hidden;
    cursor: none;
    color: #eee;
  }

  /* Animated gradient for footer */
  footer {
    background: linear-gradient(-45deg, #1a1a1a, #222, #111, #2a2a2a);
    background-size: 400% 400%;
    color: #fff;
    padding: 60px 20px 30px 20px;
    position: relative;
    overflow: hidden;
    z-index: 2;
    border: 2px solid;
    border-image: linear-gradient(45deg, #ff8cdd, #8cffea, #ffea8c, #d08cff) 1;
    animation: neonBorder 4s linear infinite alternate, gradientBG 20s ease infinite;
    border-radius: 20px;
  }

  @keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  @keyframes neonBorder {
    0% { border-image: linear-gradient(45deg, #ff8cdd, #8cffea, #ffea8c, #d08cff) 1; }
    50% { border-image: linear-gradient(45deg, #8cffea, #d08cff, #ff8cdd, #ffea8c) 1; }
    100% { border-image: linear-gradient(45deg, #ffea8c, #ff8cdd, #8cffea, #d08cff) 1; }
  }

  footer::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: rgba(255,255,255,0.02);
    backdrop-filter: blur(10px);
    transform: rotate(25deg);
    pointer-events: none;
  }

  .footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: auto;
    position: relative;
    z-index: 2;
  }

  .footer-left, .footer-center, .footer-right {
    flex: 1;
    min-width: 250px;
    margin: 10px;
    padding: 20px;
    background: rgba(0,0,0,0.25);
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
    transition: transform 0.3s;
  }

  .footer-left:hover, .footer-center:hover, .footer-right:hover {
    transform: translateY(-5px);
  }

  /* Glowing logo */
  .footer-left h2 {
    font-size: 28px;
    font-weight: bold;
    background: linear-gradient(90deg, #ff8cdd, #8cffea, #ffea8c);
    -webkit-background-clip: text;
    color: transparent;
    animation: glowText 2s ease-in-out infinite alternate;
    margin-bottom: 15px;
  }
  @keyframes glowText {
    0% { filter: drop-shadow(0 0 5px #ff8cdd); }
    50% { filter: drop-shadow(0 0 15px #8cffea); }
    100% { filter: drop-shadow(0 0 10px #ffea8c); }
  }

  /* Links and social icons */
  .footer-left p, .footer-left a { font-size: 16px; color: #eee; text-decoration: none; transition: 0.3s; }
  .footer-left a:hover { color: #ff8cdd; text-shadow: 0 0 6px #ff8cdd; }
  .social-icons a { margin-right: 12px; display: inline-block; transition: transform 0.3s, filter 0.3s; }
  .social-icons a:hover { transform: scale(1.3) rotate(-10deg); filter: drop-shadow(0 0 8px #fff); }

  .footer-center h3 { margin-bottom: 12px; color: #8cffea; text-shadow: 0 0 5px #8cffea; }
  .footer-center ul { list-style: none; padding: 0; }
  .footer-center ul li { margin: 8px 0; }
  .footer-center ul li a { color: #eee; text-decoration: none; transition: 0.3s; }
  .footer-center ul li a:hover { color: #ffea8c; text-shadow: 0 0 6px #ffea8c; }

  .footer-right h3 { font-size: 18px; margin-bottom: 12px; color: #ff8cdd; text-shadow: 0 0 5px #ff8cdd; }
  .footer-right iframe { width: 100%; height: 180px; border-radius: 12px; border: 2px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.3); margin-bottom: 15px; position: relative; left: -100%; animation: slideMap 2s forwards 0.5s; }
  @keyframes slideMap { to { left: 0; } }
  .newsletter { display: flex; flex-wrap: wrap; }
  .newsletter input { padding: 10px; flex: 1; border: none; border-radius: 8px 0 0 8px; outline: none; background: #1a1a1a; color: #eee; }
  .newsletter button { padding: 10px 20px; border: none; background-color: #ffea8c; color: #000; cursor: pointer; border-radius: 0 8px 8px 0; transition: 0.3s; }
  .newsletter button:hover { background-color: #ff8cdd; color: #fff; box-shadow: 0 0 12px #ff8cdd; }

  .footer-bottom { text-align: center; margin-top: 40px; font-size: 14px; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 15px; color: #eee; }

  @media (max-width: 768px) {
    .footer-container { flex-direction: column; align-items: center; text-align: center; }
    .footer-right iframe { height: 220px; }
    .newsletter { flex-direction: column; }
    .newsletter input, .newsletter button { border-radius: 8px; margin: 5px 0; }
  }

  /* Cursor trail */
  .cursor-trail { position: absolute; border-radius: 50%; width: 18px; height: 18px; pointer-events: none; background: radial-gradient(circle, #ff8cdd, #8cffea); mix-blend-mode: screen; transform: translate(-50%, -50%); z-index: 5; }

  /* Floating books */
  .floating-books {
    position: absolute;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
  }
  .floating-books img {
    position: absolute;
    width: 40px;
    opacity: 0.7;
    transform-style: preserve-3d;
    transition: transform 0.3s;
  }

  /* Particles */
  .particles {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 0;
    pointer-events: none;
  }
  .particle {
    position: absolute;
    border-radius: 50%;
    background: radial-gradient(circle, #8cffea, #ff8cdd);
    opacity: 0.6;
    width: 4px;
    height: 4px;
    transition: transform 0.1s;
  }
</style>
</head>
<body>

<!-- Particles -->
<div class="particles" id="particles"></div>

<!-- Floating books -->
<div class="floating-books" id="books">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:10%;">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:30%;">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:50%;">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:70%;">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:85%;">
</div>

<!-- Footer -->
<footer>
  <div class="footer-container">
    <div class="footer-left">
      <h2>BookVerse</h2>
      <p>Email: <a href="mailto:info@bookverse.com">info@bookverse.com</a></p>
      <p>Phone: <a href="tel:+919876543210">+91 9876543210</a></p>
      <div class="social-icons">
        <a href="#"><img src="https://img.icons8.com/ios-filled/30/ffffff/facebook-new.png"/></a>
        <a href="#"><img src="https://img.icons8.com/ios-filled/30/ffffff/twitter.png"/></a>
        <a href="#"><img src="https://img.icons8.com/ios-filled/30/ffffff/instagram-new.png"/></a>
      </div>
    </div>

    <div class="footer-center">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Best Sellers</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="footer-right">
      <h3>Our Location</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.798702716518!2d77.49252807518987!3d28.599106782418175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5f6f10f02bb%3A0x1f3baf7f8b2b1d68!2sKnowledge%20Park%203%2C%20Greater%20Noida!5e0!3m2!1sen!2sin!4v1692248627558!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      <div class="newsletter">
        <input type="email" placeholder="Subscribe to newsletter">
        <button>Subscribe</button>
      </div>
    </div>
  </div>
  <div class="footer-bottom">&copy; 2025 BookVerse. All Rights Reserved.</div>
</footer>

<!-- Cursor Glow -->
<div class="cursor-trail" id="cursor"></div>

<script>
  const cursor = document.getElementById('cursor');
  const books = document.querySelectorAll('.floating-books img');

  // Particles creation
  const particlesContainer = document.getElementById('particles');
  for(let i=0; i<50; i++){
    const p = document.createElement('div');
    p.classList.add('particle');
    p.style.left = Math.random()*100 + 'vw';
    p.style.top = Math.random()*100 + 'vh';
    p.style.width = p.style.height = Math.random()*5+2 + 'px';
    particlesContainer.appendChild(p);
  }

  // Mouse movement
  document.addEventListener('mousemove', e => {
    cursor.style.left = e.clientX + 'px';
    cursor.style.top = e.clientY + 'px';

    books.forEach(book => {
      const rect = book.getBoundingClientRect();
      const dx = e.clientX - (rect.left + rect.width/2);
      const dy = e.clientY - (rect.top + rect.height/2);
      const angleX = dy * 0.05;
      const angleY = dx * 0.05;
      const open = Math.sin(Date.now()/500)*15; 
      book.style.transform = `rotateX(${angleX + open}deg) rotateY(${angleY}deg) translateY(-100px)`;
    });

    document.querySelectorAll('.particle').forEach(p => {
      const dx = e.clientX - window.innerWidth/2;
      const dy = e.clientY - window.innerHeight/2;
      p.style.transform = `translate(${dx*0.01}px, ${dy*0.01}px)`;
    });
  });
</script>

</body>
</html>
