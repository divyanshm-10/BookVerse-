<php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Feedback - BookVerse</title>
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

    .feedback-box {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(12px);
      padding: 35px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      width: 420px;
      text-align: center;
      animation: fadeIn 1.2s ease-in-out;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .feedback-box h2 {
      margin-bottom: 15px;
      color: #0f4c75;
    }

    .feedback-box p {
      font-size: 14px;
      color: #333;
      margin-bottom: 20px;
    }

    .feedback-box input, 
    .feedback-box textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.6);
      box-shadow: inset 0 2px 5px rgba(0,0,0,0.05);
      font-size: 15px;
      outline: none;
      transition: 0.3s;
    }

    .feedback-box input:focus, 
    .feedback-box textarea:focus {
      box-shadow: 0 0 10px rgba(15, 76, 117, 0.4);
    }

    .feedback-box textarea {
      resize: none;
      height: 120px;
    }

    /* ⭐ Star Rating */
    .stars {
      display: flex;
      justify-content: center;
      margin: 15px 0;
      gap: 8px;
    }

    .stars input {
      display: none;
    }

    .stars label {
      font-size: 28px;
      color: #ccc;
      cursor: pointer;
      transition: 0.3s;
    }

    .stars input:checked ~ label,
    .stars label:hover,
    .stars label:hover ~ label {
      color: #f4c542;
      transform: scale(1.2);
    }

    /* Button */
    .feedback-box button {
      background: #0f4c75;
      color: #fff;
      border: none;
      padding: 14px;
      border-radius: 12px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
      width: 100%;
      margin-top: 10px;
    }

    .feedback-box button:hover {
      background: #3282b8;
      box-shadow: 0 0 12px rgba(50, 130, 184, 0.6);
    }

    /* Progress Bar */
    .progress-bar {
      width: 100%;
      height: 8px;
      background: #d9f0ff;
      border-radius: 5px;
      overflow: hidden;
      margin-top: 15px;
      display: none;
    }

    .progress-bar-fill {
      height: 100%;
      width: 0%;
      background: linear-gradient(90deg, #0f4c75, #3282b8);
      transition: width 0.3s ease-in-out;
    }

    /* Popup Card */
    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0.7);
      background: #ffffff;
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      text-align: center;
      width: 300px;
      opacity: 0;
      transition: all 0.4s ease;
      z-index: 999;
    }

    .popup.active {
      opacity: 1;
      transform: translate(-50%, -50%) scale(1);
    }

    .popup h3 {
      color: #0f4c75;
      margin: 0;
    }

    .popup p {
      margin-top: 10px;
      font-size: 15px;
      color: #333;
    }

    .popup button {
      margin-top: 15px;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      background: #0f4c75;
      color: white;
      cursor: pointer;
    }

    .popup button:hover {
      background: #3282b8;
    }
  </style>
</head>
<body>
  <div class="feedback-box">
    <h2>💬 Share Your Feedback</h2>
    <p>We’d love to hear your thoughts to improve your experience 📚</p>
    <form id="feedbackForm">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>

      <!-- ⭐ Star Rating -->
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

      <textarea name="message" placeholder="Write your feedback..." required></textarea>
      <button type="submit">✨ Submit Feedback</button>
    </form>
  </div>

  <div class="progress-bar" id="progressBar">
    <div class="progress-bar-fill" id="progressFill"></div>
  </div>

  <!-- Popup -->
  <div class="popup" id="popup">
    <h3 id="popupTitle">⌛ Submitting...</h3>
    <p id="popupMessage">Please wait while we save your feedback.</p>
    <button id="popupBtn" onclick="closePopup()" style="display:none;">Close</button>
  </div>

<script>
  document.getElementById("feedbackForm").addEventListener("submit", function(e){
    e.preventDefault();
    submitFeedback();
  });

  function submitFeedback() {
    const progressBar = document.getElementById("progressBar");
    const progressFill = document.getElementById("progressFill");
    const popup = document.getElementById("popup");
    const popupTitle = document.getElementById("popupTitle");
    const popupMessage = document.getElementById("popupMessage");
    const popupBtn = document.getElementById("popupBtn");

    // Show "Submitting..." popup
    popup.classList.add("active");
    popupTitle.innerText = "⌛ Submitting...";
    popupMessage.innerText = "Please wait while we save your feedback.";
    popupBtn.style.display = "none";

    progressBar.style.display = "block";
    let width = 0;

    let loading = setInterval(() => {
      if (width >= 100) {
        clearInterval(loading);
        progressBar.style.display = "none";

        // Save feedback to database via AJAX
        const formData = new FormData(document.getElementById("feedbackForm"));
        fetch("save_feedback.php", {
          method: "POST",
          body: formData
        }).then(res => res.text())
          .then(data => {
            popupTitle.innerText = "🎉 Thank You!";
            popupMessage.innerText = "Your feedback has been submitted successfully.";
            popupBtn.style.display = "inline-block";
          }).catch(err => {
            popupTitle.innerText = "⚠️ Error";
            popupMessage.innerText = "Something went wrong. Please try again.";
            popupBtn.style.display = "inline-block";
          });
      } else {
        width += 10;
        progressFill.style.width = width + "%";
      }
    }, 200);
  }

  function closePopup() {
    document.getElementById("popup").classList.remove("active");
    document.getElementById("feedbackForm").reset();
  }
</script>
</body>
</html>

