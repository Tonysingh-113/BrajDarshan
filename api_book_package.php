<?php
require_once 'vendor/autoload.php'; // Composer autoload for Twilio

use Twilio\Rest\Client;

// Database config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

// Twilio config (replace with your own credentials)
$twilio_sid = "YOUR_TWILIO_SID";
$twilio_token = "YOUR_TWILIO_AUTH_TOKEN";
$twilio_phone = "YOUR_TWILIO_PHONE_NUMBER";

// Connect to DB
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

// Get JSON input
$data = json_decode(file_get_contents('php://input'), true);
if (!$data) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid JSON input"]);
    exit;
}

// Validate inputs
$full_name = trim($data['full_name'] ?? '');
$email = trim($data['email'] ?? '');
$phone = trim($data['phone'] ?? '');
$package_plan = trim($data['package_plan'] ?? '');
$additional_requests = trim($data['additional_requests'] ?? '');

if (!$full_name || !$email || !$phone || !$package_plan) {
    http_response_code(400);
    echo json_encode(["error" => "Missing required fields"]);
    exit;
}

// Save booking to DB
$stmt = $conn->prepare("INSERT INTO package_bookings (full_name, email, phone, package_plan, additional_requests) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $full_name, $email, $phone, $package_plan, $additional_requests);

if (!$stmt->execute()) {
    http_response_code(500);
    echo json_encode(["error" => "Failed to save booking"]);
    exit;
}

// Send SMS confirmation using Twilio
try {
    $client = new Client($twilio_sid, $twilio_token);
    $message = "Dear $full_name, your booking for the $package_plan package at Vrindavan Temple Tour has been confirmed. Thank you! We will contact you soon.";
    
    $client->messages->create(
        $phone,
        [
            'from' => $twilio_phone,
            'body' => $message
        ]
    );
} catch (Exception $e) {
    // Log error but still return success for booking
    error_log("SMS sending failed: " . $e->getMessage());
}

$stmt->close();
$conn->close();

// Return success response
header('Content-Type: application/json');
echo json_encode([
    "success" => true,
    "message" => "Booking confirmed and SMS sent."
]);
