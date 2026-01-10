<php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interactive Feedback Form</title>
<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background: #e6f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .feedback-container {
    background: #ffffff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    width: 400px;
    text-align: center;
  }

  .feedback-container h2 {
    color: #0f4c75;
    margin-bottom: 15px;
  }

  .feedback-container textarea {
    width: 100%;
    height: 100px;
    border: 2px solid #0f4c75;
    border-radius: 10px;
    padding: 10px;
    resize: none;
    font-size: 14px;
    outline: none;
  }

  .feedback-container button {
    margin-top: 15px;
    padding: 12px 25px;
    border: none;
    border-radius: 10px;
    background: #0f4c75;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
  }

  .feedback-container button:hover {
    background: #3282b8;
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

<div class="feedback-container">
  <h2>Share Your Feedback</h2>
  <textarea id="feedback" placeholder="Write your feedback here..."></textarea>
  <button onclick="submitFeedback()">Submit</button>
  
  <div class="progress-bar" id="progressBar">
    <div class="progress-bar-fill" id="progressFill"></div>
  </div>
</div>

<!-- Popup -->
<div class="popup" id="popup">
  <h3 id="popupTitle">⌛ Submitting...</h3>
  <p id="popupMessage">Please wait while we save your feedback.</p>
  <button id="popupBtn" onclick="closePopup()" style="display:none;">Close</button>
</div>

<script>
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

        // Change popup content to Thank You
        popupTitle.innerText = "🎉 Thank You!";
        popupMessage.innerText = "Your feedback has been submitted successfully.";
        popupBtn.style.display = "inline-block";
      } else {
        width += 10;
        progressFill.style.width = width + "%";
      }
    }, 200);
  }

  function closePopup() {
    document.getElementById("popup").classList.remove("active");
    document.getElementById("feedback").value = "";
  }
</script>

</body>
</html>
