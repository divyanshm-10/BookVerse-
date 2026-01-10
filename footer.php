<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ultra Interactive Bookstore Footer</title>
<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #0a0a0a;
    overflow-x: hidden;
    cursor: none; /* We'll make a custom cursor trail */
  }

  /* --- Glowing Particles Background --- */
  .particles {
    position: absolute;
    width: 100%;
    height: 100%;
    background: #0a0a0a;
    overflow: hidden;
    z-index: 0;
  }
  .particle {
    position: absolute;
    border-radius: 50%;
    background: linear-gradient(45deg, #ff00ff, #00ffff);
    opacity: 0.7;
    width: 5px;
    height: 5px;
    animation: floatParticle linear infinite;
  }
  @keyframes floatParticle {
    0% { transform: translateY(100vh) scale(0.5); opacity: 0.5; }
    50% { opacity: 1; }
    100% { transform: translateY(-100vh) scale(1); opacity: 0; }
  }

  /* --- Floating Books in 3D Depth --- */
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
    animation: floatBooks 20s linear infinite;
    opacity: 0.8;
    transform-style: preserve-3d;
  }
  @keyframes floatBooks {
    0% { transform: translateY(100vh) translateX(0) rotateY(0deg); }
    50% { transform: translateY(50vh) translateX(50px) rotateY(180deg); }
    100% { transform: translateY(-150vh) translateX(0) rotateY(360deg); }
  }

  /* --- Footer Styles --- */
  footer {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: #fff;
    padding: 60px 20px 30px 20px;
    position: relative;
    overflow: hidden;
    z-index: 2;
  }
  footer::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: rgba(255,255,255,0.05);
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
    background: rgba(0,0,0,0.2);
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.5);
    transition: transform 0.3s;
  }
  .footer-left:hover, .footer-center:hover, .footer-right:hover {
    transform: translateY(-5px);
  }

  /* Left Section: Contact */
  .footer-left h2 { color: #ffd700; text-shadow: 0 0 8px #ffd700; margin-bottom: 15px; }
  .footer-left p, .footer-left a { font-size: 16px; color: #fff; text-decoration: none; transition: 0.3s; }
  .footer-left a:hover { color: #ff00ff; text-shadow: 0 0 8px #ff00ff; }
  .social-icons a { margin-right: 12px; display: inline-block; transition: transform 0.3s, filter 0.3s; }
  .social-icons a:hover { transform: scale(1.3) rotate(-10deg); filter: drop-shadow(0 0 8px #fff); }

  /* Center Section: Quick Links */
  .footer-center h3 { margin-bottom: 12px; color: #ffeb3b; text-shadow: 0 0 5px #ffeb3b; }
  .footer-center ul { list-style: none; padding: 0; }
  .footer-center ul li { margin: 8px 0; }
  .footer-center ul li a { color: #fff; text-decoration: none; transition: 0.3s; }
  .footer-center ul li a:hover { color: #0ff; text-shadow: 0 0 8px #0ff; }

  /* Right Section: Map & Newsletter */
  .footer-right h3 { font-size: 18px; margin-bottom: 12px; color: #00ffff; text-shadow: 0 0 5px #00ffff; }
  .footer-right iframe { width: 100%; height: 180px; border-radius: 12px; border: 2px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.3); margin-bottom: 15px; position: relative; left: -100%; animation: slideMap 2s forwards 0.5s; }
  @keyframes slideMap { to { left: 0; } }

  .newsletter { display: flex; flex-wrap: wrap; }
  .newsletter input { padding: 10px; flex: 1; border: none; border-radius: 8px 0 0 8px; outline: none; }
  .newsletter button { padding: 10px 20px; border: none; background-color: #ffeb3b; color: #000; cursor: pointer; border-radius: 0 8px 8px 0; transition: 0.3s; }
  .newsletter button:hover { background-color: #ff00ff; color: #fff; box-shadow: 0 0 8px #ff00ff; }

  /* Footer Bottom */
  .footer-bottom { text-align: center; margin-top: 40px; font-size: 14px; border-top: 1px solid rgba(255,255,255,0.3); padding-top: 15px; color: #fff; text-shadow: 0 0 3px #fff; }

  /* Responsive */
  @media (max-width: 768px) {
    .footer-container { flex-direction: column; align-items: center; text-align: center; }
    .footer-right iframe { height: 220px; }
    .newsletter { flex-direction: column; }
    .newsletter input, .newsletter button { border-radius: 8px; margin: 5px 0; }
  }

  /* --- Custom Mouse Glow Trail --- */
  .cursor-trail {
    position: absolute;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    pointer-events: none;
    background: radial-gradient(circle, #ff00ff, #00ffff);
    mix-blend-mode: screen;
    transform: translate(-50%, -50%);
    z-index: 5;
  }
</style>
</head>
<body>

<!-- Glowing Particles Background -->
<div class="particles" id="particles"></div>

<!-- Floating Books in 3D -->
<div class="floating-books">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:10%; animation-duration:20s;">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:30%; animation-duration:25s;">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:50%; animation-duration:22s;">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:70%; animation-duration:28s;">
  <img src="https://img.icons8.com/fluency/48/ffffff/book.png" style="left:85%; animation-duration:24s;">
</div>

<!-- Interactive Footer -->
<footer>
  <div class="footer-container">
    <div class="footer-left">
      <h2>BookVerse</h2>
      <p>Email: <a href="mailto:info@bookverse.com">info@bookverse.com</a></p>
      <p>Phone: <a href="tel:+919876543210">+91 9876543210</a></p>
      <div class="social-icons">
        <a href="#"><img src="https://img.icons8.com/ios-filled/30/ffffff/facebook-new.png" alt="Facebook"/></a>
        <a href="#"><img src="https://img.icons8.com/ios-filled/30/ffffff/twitter.png" alt="Twitter"/></a>
        <a href="#"><img src="https://img.icons8.com/ios-filled/30/ffffff/instagram-new.png" alt="Instagram"/></a>
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

<!-- Custom Cursor Glow -->
<div class="cursor-trail" id="cursor"></div>

<script>
  // --- Glowing Particles Creation ---
  const particlesContainer = document.getElementById('particles');
  for(let i=0; i<50; i++){
    const particle = document.createElement('div');
    particle.classList.add('particle');
    particle.style.left = Math.random()*100 + 'vw';
    particle.style.top = Math.random()*100 + 'vh';
    particle.style.width = particle.style.height = Math.random()*4+2 + 'px';
    particle.style.animationDuration = (Math.random()*10+5) + 's';
    particlesContainer.appendChild(particle);
  }

  // --- Mouse Glow Trail ---
  const cursor = document.getElementById('cursor');
  document.addEventListener('mousemove', e => {
    cursor.style.left = e.clientX + 'px';
    cursor.style.top = e.clientY + 'px';
  });
</script>

</body>
</html>
