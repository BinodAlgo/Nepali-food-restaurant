<?php 
require_once 'config.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Prepare an SQL statement
  $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $message);

  // Execute the SQL statement
  if ($stmt->execute()) {
    echo "Thank you for your message. We will get back to you soon.";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the connection
  $stmt->close();
  $conn->close();
}

?>