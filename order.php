<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClaryCandle Restaurant - Home</title>
  <meta name="description"
    content="Welcome to ClaryCandle Restaurant. Enjoy our delectable dishes in an enchanting atmosphere.">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
<?php include_once 'header.php' ?> 

  <div id="order-page">
    <div id="message-box" style="display: none;"></div>
    <h1>Place Your Order</h1>
    <form id="order-form">
      <label for="dish">Dish Name:</label><br>
      <input type="text" id="dish" name="dish" required><br>

      <label for="quantity">Quantity:</label><br>
      <input type="number" id="quantity" name="quantity" min="1" required><br>

      <label for="address">Delivery Address:</label><br>
      <textarea id="address" name="address" required></textarea><br>

      <label for="instructions">Special Instructions:</label><br>
      <textarea id="instructions" name="instructions"></textarea><br>

      <input type="submit" value="Submit Order">
    </form>
  </div>
<?php include_once 'footer.php' ?>