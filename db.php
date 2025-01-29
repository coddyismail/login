<?php
$host = "localhost";
$user = "root";  // Default MySQL username in XAMPP
$pass = "";       // No password by default
$dbname = "user_db"; // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
