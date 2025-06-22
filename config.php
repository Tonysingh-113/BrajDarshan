<?php
// Database configuration
$servername = 'localhost';
$dbname = 'book_db';
$username = 'root';
$password = '';

$conn = new mysqli( $servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error );
}