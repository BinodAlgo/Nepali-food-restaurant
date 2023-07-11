<?php // Database configuration
$dbHost = "localhost";
$dbUser = "gitaganesh";
$dbPassword = "gitaganesh@123";
$dbName = "clarycandle";

// Create connection
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>