<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #a8d8f0, #e6f4f9);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .feedback-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 400px;
      text-align: center;
    }

    .feedback-container h2 {
      margin-bottom: 20px;
      color: #0077b6;
    }

    .feedback-container input,
    .feedback-container textarea,
    .feedback-container button {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    .feedback-container textarea {
      height: 100px;
      resize: none;
    }

    .feedback-container button {
      background: #00b4d8;
      color: white;
      border: none;
      cursor: pointer;
      transition: 0.3s;
    }

    .feedback-container button:hover {
      background: #0077b6;
    }

    /* Stars */
    .stars {
      display: flex;
      justify-content: center;
      gap: 5px;
      margin: 10px 0;
    }

    .stars input {
      display: none;
    }

    .stars label {
      font-size: 24px;
      color: #ccc;
      cursor: pointer;
      transition: 0.3s;
    }

    .stars input:checked ~ label,
    .stars label:hover,
    .stars label:hover ~ label {
      color: #ffb703;
    }

    /* Popup */
    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0);
      background: #fff;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      text-align: center;
      width: 320px;
      z-index: 9999;
      transition: 0.3s ease-in-out;
    }

    .popup.active {
      transform: translate(-50%, -50%) scale(1);
    }

    .popup h2 {
      margin: 10px 0;
      color: #0077b6;
    }

    .popup button {
      margin-top: 10px;
      padding: 10px 20px;
      background: #00b4d8;
      border: none;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    .popup button:hover {
      background: #0077b6;
    }

    /* Progress Bar */
    .progress-bar {
      width: 100%;
      height: 8px;
      background: #eee;
      border-radius: 5px;
      margin-top: 15px;
      overflow: hidden;
      display: none;
    }

    .progress-fill {
      height: 100%;
      width: 0%;
      background: #00b4d8;
      transition: width 0.2s;
    }
  </style>
</head>
<body>

  <div class="feedback-container">
    <h2>💬 Share Your Feedback</h2>
     <p>We’d love to hear your thoughts to improve your experience 📚</p>
    <form id="feedbackForm">
        <form action="save_feedback.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>

      <div class="stars">
        <input type="radio" name="rating" id="star5" value="5" required>
        <label for="star5">★</label>
        <input type="radio" name="rating" id="star4" value="4">
        <label for="star4">★</label>
        <input type="radio" name="rating" id="star3" value="3">
        <label for="star3">★</label>
        <input type="radio" name="rating" id="star2" value="2">
        <label for="star2">★</label>
        <input type="radio" name="rating" id="star1" value="1">
        <label for="star1">★</label>
      </div>

      <textarea id="feedback" name="message" placeholder="Write your feedback..." required></textarea>
      <button type="submit">✨ Submit Feedback</button>
    </form>
  </div>

  <!-- Popup -->
  <div class="popup" id="popup">
    <h2 id="popupTitle">⌛ Submitting...</h2>
    <p id="popupMessage">Please wait while we save your feedback.</p>
    <div class="progress-bar" id="progressBar">
      <div class="progress-fill" id="progressFill"></div>
    </div>
    <button id="popupBtn" onclick="closePopup()" style="display:none;">OK</button>
  </div>

  <script>
    document.getElementById("feedbackForm").addEventListener("submit", function(e) {
      e.preventDefault(); // stop default submit
      submitFeedback();
    });

    function submitFeedback() {
      const progressBar = document.getElementById("progressBar");
      const progressFill = document.getElementById("progressFill");
      const popup = document.getElementById("popup");
      const popupTitle = document.getElementById("popupTitle");
      const popupMessage = document.getElementById("popupMessage");
      const popupBtn = document.getElementById("popupBtn");

      // Show popup
      popup.classList.add("active");
      popupTitle.innerText = "⌛ Submitting...";
      popupMessage.innerText = "Please wait while we save your feedback.";
      popupBtn.style.display = "none";

      progressBar.style.display = "block";
      let width = 0;
      progressFill.style.width = "0%";

      let loading = setInterval(() => {
        if (width >= 100) {
          clearInterval(loading);
          progressBar.style.display = "none";

          // Change popup to Thank You
          popupTitle.innerText = "🎉 Thank You!";
          popupMessage.innerText = "Your feedback has been submitted successfully.";
          popupBtn.style.display = "inline-block";

          // Reset form
          document.getElementById("feedbackForm").reset();
        } else {
          width += 10;
          progressFill.style.width = width + "%";
        }
      }, 200);
    }

    function closePopup() {
      document.getElementById("popup").classList.remove("active");
    }
  </script>

</body>
</html>
