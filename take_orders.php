<?php
require_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $dish = $_POST['dish'];
  $quantity = $_POST['quantity'];
  $address = $_POST['address'];
  $instructions = $_POST['instructions'];

  // Prepare an SQL statement for execution
  $stmt = $conn->prepare("INSERT INTO orders (dish_name, quantity, delivery_address, special_instructions) VALUES (?, ?, ?, ?)");

  // Bind variables to the prepared statement as parameters
  $stmt->bind_param("siss", $dish, $quantity, $address, $instructions);

  // Attempt to execute the prepared statement
  if ($stmt->execute()) {
    echo "Your order has been placed successfully!";
    header('Location:order.html');
  } else {
    echo "Something went wrong. Please try again later.";
  }

  // Close statement
  $stmt->close();
}

// Close connection
$conn->close();
?>