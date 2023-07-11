<?php
// Connect to the database
require_once 'config.php';

// Get the submitted data
$name = $conn->real_escape_string($_POST['name']);
$phone = $conn->real_escape_string($_POST['phone']);
$date = $conn->real_escape_string($_POST['date']);
$time = $conn->real_escape_string($_POST['time']);
$people = intval($_POST['people']);

// Insert the reservation into the database
$sql = "INSERT INTO reservations (name, phone, date, time, people)
        VALUES ('$name', '$phone', '$date', '$time', $people)";
if ($conn->query($sql) === TRUE) {
    echo "Reservation made successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>