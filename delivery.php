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
<div id="delivery-page">
  <h1>Delivery Information</h1>

  <div class="delivery-info">
    <h2>Delivery Policy</h2>
    <p>We offer home delivery for orders over &pound;25. Our normal delivery hours are from 10:00 AM to 10:00 PM.</p>
  </div>

  <div class="delivery-info">
    <h2>Delivery Areas</h2>
    <p>We currently deliver to the following areas: Downtown, Uptown, Old Town, New Town, River Side.</p>
  </div>

  <div class="delivery-info">
    <h2>Delivery Time</h2>
    <p>Your order will typically arrive within 45-60 minutes. Delivery times may increase during peak hours and on
      weekends.</p>
  </div>

  <h2>Check Delivery Availability</h2>
  <form id="check-availability-form">
    <label for="postcode">Enter your postcode:</label><br>
    <input type="text" id="postcode" name="postcode" required><br>
    <input type="submit" value="Check Availability">
  </form>
</div>
<?php include_once 'footer.php' ?>