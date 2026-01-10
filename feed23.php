<php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Feedback - BookVerse</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <style>
    body{font-family:'Segoe UI',sans-serif;background:linear-gradient(135deg,#a8d8f0,#e6f4f9);margin:0;display:flex;align-items:center;justify-content:center;min-height:100vh}
    .feedback-box{background:rgba(255,255,255,0.85);backdrop-filter:blur(12px);padding:28px;border-radius:18px;box-shadow:0 8px 25px rgba(0,0,0,.12);width:420px;text-align:center}
    .feedback-box h2{color:#0f4c75;margin:6px 0 12px}
    .feedback-box p{color:#333;margin:0 0 14px;font-size:14px}
    .feedback-box input,.feedback-box textarea{width:100%;padding:12px;margin:10px 0;border:none;border-radius:12px;background:rgba(255,255,255,0.8);box-shadow:inset 0 2px 5px rgba(0,0,0,.04);font-size:15px;outline:none;transition:.2s}
    .feedback-box input:focus,.feedback-box textarea:focus{box-shadow:0 0 10px rgba(15,76,117,0.28)}
    .feedback-box textarea{height:120px;resize:none}
    .stars{display:flex;justify-content:center;gap:8px;margin:8px 0}
    .stars input{display:none}
    .stars label{font-size:28px;color:#ccc;cursor:pointer;transition:.18s}
    .stars input:checked ~ label, .stars label:hover, .stars label:hover ~ label{color:#f4c542;transform:scale(1.15)}
    .feedback-box button{width:100%;padding:13px;border-radius:12px;border:none;background:linear-gradient(135deg,#0f4c75,#3282b8);color:#fff;font-size:16px;cursor:pointer}
    .feedback-box button:hover{filter:brightness(.98);transform:translateY(-2px)}
    /* Progress */
    .progress-bar{width:100%;height:8px;background:#d9f0ff;border-radius:6px;overflow:hidden;margin-top:14px;display:none}
    .progress-bar-fill{height:100%;width:0;background:linear-gradient(90deg,#0f4c75,#3282b8);transition:width .25s ease-in-out}
    /* Popup */
    .popup{position:fixed;top:50%;left:50%;transform:translate(-50%,-50%) scale(.75);width:320px;background:#fff;padding:20px;border-radius:14px;box-shadow:0 10px 35px rgba(0,0,0,.18);text-align:center;opacity:0;pointer-events:none;transition:all .32s ease;z-index:9999}
    .popup.active{opacity:1;transform:translate(-50%,-50%) scale(1);pointer-events:auto}
    .popup h3{color:#0f4c75;margin:0;font-size:18px}
    .popup p{color:#333;margin:10px 0;font-size:14px}
    .popup button{padding:10px 14px;border-radius:8px;border:none;background:linear-gradient(135deg,#0f4c75,#3282b8);color:#fff;cursor:pointer}
    .popup button:hover{filter:brightness(.95)}
  </style>
</head>
<body>

  <div class="feedback-box" role="region" aria-labelledby="fb-title">
    <h2 id="fb-title">💬 Share Your Feedback</h2>
    <p>We’d love to hear your thoughts to improve your experience 📚</p>

    <!-- Form (has id so we can intercept submit) -->
    <form id="feedbackForm" action="save_feedback.php" method="POST" novalidate>
      <input id="name" name="name" type="text" placeholder="Your Name" required />
      <input id="email" name="email" type="email" placeholder="Your Email" required />

      <!-- Star Rating (simple) -->
      <div class="stars" aria-hidden="true">
        <input id="star5" name="rating" type="radio" value="5" required /><label for="star5">★</label>
        <input id="star4" name="rating" type="radio" value="4" /><label for="star4">★</label>
        <input id="star3" name="rating" type="radio" value="3" /><label for="star3">★</label>
        <input id="star2" name="rating" type="radio" value="2" /><label for="star2">★</label>
        <input id="star1" name="rating" type="radio" value="1" /><label for="star1">★</label>
      </div>

      <textarea id="message" name="message" placeholder="Write your feedback..." required></textarea>

      <button type="submit" id="submitBtn">✨ Submit Feedback</button>

      <div class="progress-bar" id="progressBar" aria-hidden="true">
        <div class="progress-bar-fill" id="progressFill"></div>
      </div>
    </form>
  </div>

  <!-- Popup -->
  <div class="popup" id="popup" role="dialog" aria-modal="true" aria-hidden="true">
    <h3 id="popupTitle">⌛ Submitting...</h3>
    <p id="popupMessage">Please wait while we save your feedback.</p>
    <button id="popupBtn" style="display:none" onclick="closePopup()">Close</button>
  </div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('feedbackForm');
  form.addEventListener('submit', function(e){
    e.preventDefault();           // prevent normal submit
    submitFeedback(this);         // start UI + AJAX submit
  });
});

async function submitFeedback(form) {
  const progressBar = document.getElementById('progressBar');
  const progressFill = document.getElementById('progressFill');
  const popup = document.getElementById('popup');
  const popupTitle = document.getElementById('popupTitle');
  const popupMessage = document.getElementById('popupMessage');
  const popupBtn = document.getElementById('popupBtn');
  const submitBtn = document.getElementById('submitBtn');

  // disable submit button while processing
  submitBtn.disabled = true;
  submitBtn.style.opacity = '0.7';

  // show submitting popup
  popup.classList.add('active');
  popupTitle.innerText = '⌛ Submitting...';
  popupMessage.innerText = 'Please wait while we save your feedback.';
  popupBtn.style.display = 'none';
  popup.setAttribute('aria-hidden', 'false');

  // show progress
  progressBar.style.display = 'block';
  progressFill.style.width = '0%';

  // start progress animation (non-blocking)
  let width = 0;
  const progressPromise = new Promise(resolve => {
    const t = setInterval(() => {
      // increase by random small amount to feel organic
      width += Math.floor(Math.random() * 12) + 6;
      if (width >= 95) {
        width = 95; // hold just before 100 until server done
        progressFill.style.width = width + '%';
        clearInterval(t);
        resolve(); // progress reached near-end; we'll finalize later
      } else {
        progressFill.style.width = width + '%';
      }
    }, 180);
  });

  // perform AJAX submit
  let serverOk = false;
  let serverMsg = '';
  try {
    const fd = new FormData(form);
    const res = await fetch(form.action, {
      method: form.method || 'POST',
      body: fd,
      credentials: 'same-origin'
    });

    if (res.ok) {
      serverOk = true;
      // Optional: parse response text or JSON for message
      try { serverMsg = await res.text(); } catch(e) { serverMsg = ''; }
    } else {
      serverOk = false;
      serverMsg = `Server returned ${res.status}`;
    }
  } catch (err) {
    serverOk = false;
    serverMsg = err.message || 'Network error';
  }

  // wait for progress to reach near-end
  await progressPromise;

  // finalize progress to 100%
  progressFill.style.width = '100%';

  // small delay for UX
  setTimeout(() => {
    progressBar.style.display = 'none';

    if (serverOk) {
      popupTitle.innerText = '🎉 Thank You!';
      popupMessage.innerText = 'Your feedback was submitted successfully.';
      popupBtn.style.display = 'inline-block';
      // reset form fields (keep rating if you want)
      form.reset();
    } else {
      popupTitle.innerText = '⚠️ Submission Failed';
      popupMessage.innerText = 'Could not submit feedback. Please try again later.';
      if (serverMsg) popupMessage.innerText += '\n(' + serverMsg + ')';
      popupBtn.style.display = 'inline-block';
    }

    submitBtn.disabled = false;
    submitBtn.style.opacity = '1';
  }, 450);
}

function closePopup() {
  const popup = document.getElementById('popup');
  const progressBar = document.getElementById('progressBar');
  const progressFill = document.getElementById('progressFill');

  popup.classList.remove('active');
  popup.setAttribute('aria-hidden', 'true');

  // reset progress visuals
  progressFill.style.width = '0%';
  progressBar.style.display = 'none';
}
</script>
</body>
</html>
