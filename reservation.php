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

  <style>
  /* Reservation Page  */
#reservation-page {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
  min-height: 100vh;
  max-width:100%;
  background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
  color: #444;
  font-family: 'Helvetica Neue', Arial, sans-serif;
}

#reservation-form {
  width: 700px;
  padding: 2em;
  background: white;
  border-radius: 15px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

#reservation-form h1 {
  text-align: center;
  margin-bottom:10px;
  font-size:30px;
  color: #666;
}

#reservation-form label {
  font-weight: bold;
  display: block;
  margin: 15px 0 5px;
}

#reservation-form input {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

#reservation-form button, #reservation-form input[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  background: #eb7250;
  color: white;
  font-weight: bold;
  border-radius: 5px;
  margin-top: 20px;
  cursor: pointer;
  transition: background 0.5s;
}

#reservation-form button:hover, #reservation-form input[type="submit"]:hover {
  background: #c9a328;
}

#backToHome{
  font-size:25px;
  position:relative;
  z-index:1000;
  top:10px;
}


  </style>
</head>

<body>
<?php include_once 'header.php' ?>

  <div id="reservation-page">
    <h1>Make a Reservation</h1>

    <form id="reservation-form" onsubmit="submitReservationForm(event)">
      <div id="step-1">
        <label for="name">Your Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="phone">Your Phone:</label><br>
        <input type="tel" id="phone" name="phone" required><br>

        <button type="button" onclick="goToStep(2)">Next</button>
      </div>

      <div id="step-2" style="display: none;">
        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date" required><br>

        <label for="time">Time:</label><br>
        <input type="time" id="time" name="time" required><br>

        <button type="button" onclick="goToStep(1)">Back</button>
        <button type="button" onclick="goToStep(3)">Next</button>
      </div>

      <div id="step-3" style="display: none;">
        <label for="people">Number of People:</label><br>
        <input type="number" id="people" name="people" required><br>

        <button type="button" onclick="goToStep(2)">Back</button>
        <input type="submit" value="Make Reservation">
      </div>
    </form>
  </div>
 <?php include_once 'footer.php' ?>
