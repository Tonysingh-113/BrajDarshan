<?php
session_start();
require 'config.php';

// Check admin session (replace this with your actual admin session logic)
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

// Fetch User Feedback
$feedback_sql = "SELECT id, name, email, rating, comments, submitted_at FROM user_feedback ORDER BY submitted_at DESC";
$feedback_result = $conn->query($feedback_sql);

// Fetch Bookings
$booking_sql = "SELECT id, name, email, phone, address, location, guests, arrivals, leaving FROM book_form";
$booking_result = $conn->query($booking_sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Admin Portal - User Feedback & Bookings</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background: #f9f9f9;
    padding: 20px;
    color: #333;
  }
  h1 {
    text-align: center;
    color: #FFA500;
    margin-bottom: 40px;
  }
  h2 {
    color: #FFA500;
    margin-top: 50px;
    margin-bottom: 20px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 40px;
    box-shadow: 0 10px 30px rgba(74, 51, 159, 0.15);
  }
  th, td {
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: left;
  }
  th {
    background-color: #FFA500;
    color: white;
  }
  tbody tr:nth-child(even) {
    background-color: #f4f0fa;
  }
  tbody tr:hover {
    background-color: #e5dbfa;
  }
  .logout-btn {
    background-color: #FFA500;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 700;
    display: inline-block;
    margin-bottom: 20px;
    transition: background-color 0.3s ease;
  }
  .logout-btn:hover {
    background-color: #E17000;
  }
  .no-data {
    text-align: center;
    font-size: 1.2rem;
    color: #666;
  }
  @media(max-width: 768px) {
    table, thead, tbody, th, td, tr {
      display: block;
    }
    thead tr {
      position: absolute;
      top: -9999px;
      left: -9999px;
    }
    tr {
      margin-bottom: 1.5rem;
      border-bottom: 2px solid #FFA500;
    }
    td {
      border: none;
      padding-left: 50%;
      position: relative;
      white-space: normal;
      text-align: left;
    }
    td:before {
      position: absolute;
      top: 12px;
      left: 15px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
      font-weight: 700;
      color: #FFA500;
    }
    /* Labels for each column in feedback table */
    tbody tr td:nth-of-type(1):before { content: "ID"; }
    tbody tr td:nth-of-type(2):before { content: "Name"; }
    tbody tr td:nth-of-type(3):before { content: "Email"; }
    tbody tr td:nth-of-type(4):before { content: "Rating"; }
    tbody tr td:nth-of-type(5):before { content: "Comments"; }
    tbody tr td:nth-of-type(6):before { content: "Submitted At"; }
    /* Labels for booking table (restart from 1) */
    tbody tr td:nth-of-type(1):before { content: "ID"; }
    tbody tr td:nth-of-type(2):before { content: "Full Name"; }
    tbody tr td:nth-of-type(3):before { content: "Email"; }
    tbody tr td:nth-of-type(4):before { content: "Phone"; }
    tbody tr td:nth-of-type(5):before { content: "Package"; }
    tbody tr td:nth-of-type(6):before { content: "No. of Persons"; }
    tbody tr td:nth-of-type(7):before { content: "Additional Requests"; }
    tbody tr td:nth-of-type(8):before { content: "Booking Date"; }
  }
</style>
</head>
<body>
<a href="login_form.php" class="logout-btn" aria-label="Logout">Logout</a>
<h1>Admin Portal Dashboard</h1>


<h2>User Feedback Submissions</h2>
<?php if ($feedback_result && $feedback_result->num_rows > 0): ?>
  <table aria-describedby="feedbackTableCaption" role="table">
    <caption id="feedbackTableCaption" style="text-align:left; padding: 10px 0; font-weight: 600; color: #FFA500;">
      All feedback received from users
    </caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Rating</th>
        <th>Comments</th>
        <th>Submitted At</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $feedback_result->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row['id']) ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['rating']) ?>/5</td>
        <td><?= nl2br(htmlspecialchars($row['comments'])) ?></td>
        <td><?= htmlspecialchars($row['submitted_at']) ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
<?php else: ?>
  <p class="no-data">No feedback entries found.</p>
<?php endif; ?>


<h2>Booking Records</h2>
<?php if ($booking_result && $booking_result->num_rows > 0): ?>
  <table aria-describedby="bookingTableCaption" role="table">
    <caption id="bookingTableCaption" style="text-align:left; padding: 10px 0; font-weight: 600; color: #FFA500;">
      All bookings received from customers
    </caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Location</th>
        <th>Guests</th>
        <th>Arrivals</th>
        <th>Departure</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $booking_result->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row['id']) ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['phone']) ?></td>
        <td><?= htmlspecialchars($row['address']) ?></td>
        <td><?= htmlspecialchars($row['location']) ?></td>
        <td><?= htmlspecialchars($row['guests']) ?></td>
        <td><?= htmlspecialchars($row['arrivals']) ?></td>
        <td><?= htmlspecialchars($row['leaving']) ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
<?php else: ?>
  <p class="no-data">No booking records found.</p>
<?php endif; ?>

</body>
</html>
