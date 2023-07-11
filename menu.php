<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClaryCandle Restaurant - Home</title>
  <meta name="description"
    content="Welcome to ClaryCandle Restaurant. Enjoy our delectable dishes in an enchanting atmosphere.">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <?php include_once 'header.php' ?>
    <div id="menu-page">
      <h1>Our Menu</h1>
      <div id="menu-categories">
        <button class="category-btn active" onclick="filterMenu('all')">All</button>
        <button class="category-btn" onclick="filterMenu('starter')">Starters</button>
        <button class="category-btn" onclick="filterMenu('main-course')">Main Courses</button>
        <button class="category-btn" onclick="filterMenu('dessert')">Desserts</button>
      </div>
    
      <div id="menu-items">
        <!-- Starters -->
        <div class="menu-item starter">
          <img src="assets/images/samosa.webp" alt="Samosa">
          <h2>Samosa <span>&pound;4.99</span></h2>
          <p>Crispy pastries with a savory filling of spiced potatoes, onions, peas.</p>
        </div>
      <div class="menu-item starter">
        <img src="assets/images/paneer-tikka.jpeg" alt="Paneer Tikka">
        <h2>Paneer Tikka <span>&pound;5.99</span></h2>
        <p>Marinated cubes of paneer cheese grilled to perfection. A delicious vegetarian starter.</p>
      </div>
      <div class="menu-item starter">
        <img src="assets/images/chicken-tikka.webp" alt="Chicken Tikka">
        <h2>Chicken Tikka <span>&pound;6.99</span></h2>
        <p>Chunks of chicken marinated in spices and yogurt, baked in a tandoor oven.</p>
      </div>
    
        <!-- Main Courses -->
        <div class="menu-item main-course">
          <img src="assets/images/dalbhat.jpeg" alt="Dal Bhat">
          <h2>Dal Bhat <span>&pound;10.99</span></h2>
          <p>A traditional Nepalese dish. Hearty lentil soup served with rice and seasonal vegetables.</p>
        </div>
      <div class="menu-item main-course">
        <img src="assets/images/biryani.jpeg" alt="Biryani">
        <h2>Biryani <span>&pound;12.99</span></h2>
        <p>A flavorful Indian dish made by cooking fragrant basmati rice with a mix of meat or vegetables.</p>
      </div>
      
      <div class="menu-item main-course">
        <img src="assets/images/butter-chicken.jpeg" alt="Butter Chicken">
        <h2>Butter Chicken <span>&pound;13.99</span></h2>
        <p>Roasted marinated chicken in a spiced curry sauce. A popular Indian dish.</p>
      </div>
    
        <!-- Desserts -->
        <div class="menu-item dessert">
          <img src="assets/images/gulabjamun.jpeg" alt="Gulab Jamun">
          <h2>Gulab Jamun <span>&pound;5.99</span></h2>
          <p>Soft milk dumplings soaked in a sweet syrup. A beloved Nepalese dessert.</p>
        </div>
      <div class="menu-item dessert">
        <img src="assets/images/kheer.webp" alt="Kheer">
        <h2>Kheer <span>&pound;6.99</span></h2>
        <p>Nepali rice pudding cooked with milk and sugar, flavored with cardamom, raisins, saffron, cashews, pistachios.</p>
      </div>
      
      <div class="menu-item dessert">
        <img src="assets/images/jalebi.jpeg" alt="Jalebi">
        <h2>Jalebi <span>&pound;7.99</span></h2>
        <p>A popular Nepali dessert made by deep-frying a wheat flour batter in pretzel or circular shapes, then soaked in
          sugar syrup.</p>
      </div>
      </div>
    </div>
<?php include_once 'footer.php' ?>