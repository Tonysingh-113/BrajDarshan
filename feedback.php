<?php
session_start();
require 'config.php'; // Your DB connection file

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $rating = (int) ($_POST['rating'] ?? 0);
    $comments = trim($_POST['comments'] ?? '');

    // Basic validation
    if (!$name || !$email || !$rating) {
        $message = "Please fill in your name, email, and rating.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
    } elseif ($rating < 1 || $rating > 5) {
        $message = "Please select a valid rating.";
    } else {
        // Insert feedback into DB
        $stmt = $conn->prepare("INSERT INTO user_feedback ( name, email, rating, comments) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $rating, $comments);
        if ($stmt->execute()) {
            $message = "Thank you for your feedback!";
            // Clear form fields after successful submit
            $name = $email = $comments = '';
            $rating = 0;
        } else {
            $message = "Oops! Something went wrong. Please try again.";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>User Feedback</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    /* background: linear-gradient(135deg, #667eea, #764ba2); */
    min-height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem;
    color: #333;
  }

  .feedback-form {
    background: #fff;
    border-radius: 12px;
    padding: 30px 35px;
    max-width: 420px;
    width: 100%;
    background:  rgba(0, 0, 0, 0.6);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    animation: fadeInUp 0.8s ease forwards;
  }

  h2 {
    text-align: center;
    margin-bottom: 25px;
    color:#FFA500;
  }

  label {
    font-weight: 600;
    display: block;
    margin-bottom: 6px;
    color: white;
  }

  input[type="text"],
  input[type="email"],
  select,
  textarea {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 20px;
    border-radius: 8px;
    border: 1.8px solid #ddd;
    font-size: 1rem;
    transition: border-color 0.3s ease;
    resize: vertical;
  }

  input[type="text"]:focus,
  input[type="email"]:focus,
  select:focus,
  textarea:focus {
    border-color:#FFA500;
    outline: none;
  }

  button {
    width: 100%;
    padding: 14px;
    background-color: #FFA500;
    color: white;
    border: none;
    border-radius: 10px;
    font-weight: 700;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }

  button:hover,
  button:focus {
    background-color: #E17000 ;
    /* box-shadow: 0 5px 15px rgba(91,44,129,0.4); */
    outline: none;
  }

  .message {
    text-align: center;
    margin-bottom: 20px;
    font-weight: 600;
    color: #ff4b5c; 
  }

  .message.success {
    color: #28a745; 
  }

  /* Animation */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(40px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }


#bg-video {
    position: fixed;
    /* margin-right: 5rem; */
    bottom: 0;
    width: 100%;
    max-height: 100%;
    z-index: -2;
    object-fit: cover;
}

/* Dark Overlay */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5); 
    z-index: -1;
}
/*  login video background end */



</style>
</head>
<body>
  <video autoplay muted loop id="bg-video" src="images/vrindavan.webm">
    </video>

    <!-- Dark Overlay -->
    <div class="overlay"></div>

<form class="feedback-form" method="post" action="" aria-label="User feedback form">
  <h2>User Experience Feedback</h2>

  <?php if ($message): ?>
    <p class="message <?= strpos($message, 'Thank you') === 0 ? 'success' : '' ?>" role="alert"><?= htmlspecialchars($message) ?></p>
  <?php endif; ?>

  <label for="name">Name *</label>
  <input
    type="text"
    id="name"
    name="name"
    placeholder="Your full name"
    value="<?= htmlspecialchars($name ?? '') ?>"
    required
  />

  <label for="email">Email *</label>
  <input
    type="email"
    id="email"
    name="email"
    placeholder="Your email address"
    value="<?= htmlspecialchars($email ?? '') ?>"
    required
  />

  <label for="rating">Overall Experience Rating *</label>
  <select id="rating" name="rating" required>
    <option value="" disabled <?= empty($rating) ? 'selected' : '' ?>>Select rating</option>
    <option value="5" <?= (isset($rating) && $rating == 5) ? 'selected' : '' ?>>Excellent (5)</option>
    <option value="4" <?= (isset($rating) && $rating == 4) ? 'selected' : '' ?>>Very Good (4)</option>
    <option value="3" <?= (isset($rating) && $rating == 3) ? 'selected' : '' ?>>Good (3)</option>
    <option value="2" <?= (isset($rating) && $rating == 2) ? 'selected' : '' ?>>Fair (2)</option>
    <option value="1" <?= (isset($rating) && $rating == 1) ? 'selected' : '' ?>>Poor (1)</option>
  </select>

  <label for="comments">Additional Comments</label>
  <textarea
    id="comments"
    name="comments"
    placeholder="Your feedback or suggestions"
    rows="4"
  ><?= htmlspecialchars($comments ?? '') ?></textarea>

  <button type="submit" aria-label="Submit feedback form">Submit Feedback</button><br><br>
  <button type="submit" aria-label="Submit feedback form" onclick="window.location.href='home.php'">Back</button>
</form>

</body>
</html>
