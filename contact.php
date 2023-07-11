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
    #contact-page {
  padding: 20px;
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
  background: #fff;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  border-radius: 8px;
}

h1 {
  color: #ffffff;
  margin-bottom: 30px;
  font-size:30px;
}

.contact-info {
  margin-bottom: 30px;
  text-align: left;
}

#contact-form {
  display: grid;
  max-width:800px;
  grid-gap: 6px;
}

#contact-form label {
  display: block;
  font-weight: bold;
  color: #555;
}

#contact-form input, #contact-form textarea {
  padding: 15px;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box;
  outline: none;
}

#contact-form input[type="submit"] {
  background-color: #7c4dff;
  color: #fff;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

#contact-form input[type="submit"]:hover {
  background-color: #651dca;
}

  </style>
</head>

<body>
<?php include_once 'header.php'?>
  <div id="contact-page">
    <h1>Contact Us</h1>

    <div class="contact-info">
      <h2>Our Location</h2>
      <p>123 Main St, Huntington, UK</p>

      <h2>Our Phone Number</h2>
      <p>+44324567890</p>

      <h2>Our Email</h2>
      <p>info@clarycandle.com</p>
    </div>

    <form id="contact-form">
      <label for="name">Your Name:</label><br>
      <input type="text" id="name" name="name" required><br>

      <label for="email">Your Email:</label><br>
      <input type="email" id="email" name="email" required><br>

      <label for="message">Your Message:</label><br>
      <textarea id="message" name="message" required></textarea><br>

      <input type="submit" value="Send Message">
    </form>
  </div>
 <?php include_once 'footer.php' ?>