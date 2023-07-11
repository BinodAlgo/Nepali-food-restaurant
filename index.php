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
  <main>
    <section id="specials">
      <h2>Today's Specials</h2>
      <div class="special">
        <img src="assets/images/dalbhat.jpeg" alt="Dal Bhat">
        <h3>Dal Bhat</h3>
        <p>A traditional Nepalese dish. Hearty lentil soup served with rice and seasonal vegetables.</p>
        <p class="price">&pound;10.99</p>
      </div>
      <div class="special">
        <img src="assets/images/momo.png" alt="Momo">
        <h3>Momo</h3>
        <p>Delicious steamed dumplings filled with seasoned minced meat or vegetables. Served with tangy tomato chutney.
        </p>
        <p class="price">&pound;7.99</p>
      </div>
      <div class="special">
        <img src="assets/images/sekuwa.jpeg" alt="Sekuwa">
        <h3>Sekuwa</h3>
        <p>Marinated meat skewers, traditionally cooked in a tandoor oven. Served with beaten rice and a side of achar.
        </p>
        <p class="price">&pound;12.99</p>
      </div>
    </section>

    <section id="about">
      <h2>About Us</h2>
      <p>Located in the heart of the city, ClaryCandle Restaurant is a family-owned establishment that has been serving
        authentic Nepali cuisine since 1990. With a passion for culinary excellence and a commitment to a memorable
        dining
        experience, we pride ourselves on our exquisite food and exemplary service.</p>

      <p>Our menu is a vibrant array of traditional Nepali dishes, crafted with love and the finest locally sourced
        ingredients. From the heartwarming Dal Bhat and the flavorful Momos, to the succulent Sekuwa - every dish is a
        journey through the culinary landscape of Nepal.</p>

      <p>Featuring a warm and welcoming atmosphere, our restaurant interiors echo the beauty and richness of the Nepali
        culture. With a dedicated team of professionals, we strive to provide top-notch service and ensure that every
        customer feels like a part of our family.</p>

      <p>At ClaryCandle, we believe that good food can bring people together and create lasting memories. We invite you
        to
        join us for a meal, experience the flavors of Nepal, and become a part of our culinary story.</p>
    </section>


    <section>
      <h2>Our Services</h2>
      <div id="services">
        <div class="service">
          <img src="assets/images/dining.jpeg" alt="Fine Dining">
          <h3>Fine Dining</h3>
          <p>Experience the luxury of our premier fine dining options.</p>
        </div>
        <div class="service">
          <img src="assets/images/delivery.jpeg" alt="Delivery">
          <h3>Delivery</h3>
          <p>Enjoy our delicious food at your own convenience with our delivery service.</p>
        </div>
        <!-- Add more services as required -->
      </div>
    </section>

    <section>
      <h2>Our Gallery</h2>
      <div id="gallery">
        <div class="gallery-item">
          <img src="assets/images/gallery-1.jpeg" alt="Gallery image 1">
        </div>
        <div class="gallery-item">
          <img src="assets/images/gallery-2.jpeg" alt="Gallery image 2">
        </div>
        <div class="gallery-item">
          <img src="assets/images/gallery-3.jpeg" alt="Gallery image 3">
        </div>
      </div>
    </section>

    <section id="reviews">
      <h2>Reviews</h2>
      <div class="review">
        <p>“"I visited ClaryCandle restaurant with my family and was thoroughly impressed with the service, quality, and variety of
        dishes offered. The momos were the highlight of our meal, and the ambiance is homely and welcoming. I would highly
        recommend ClaryCandle to anyone in search of authentic and delicious Nepali cuisine." - Ramesh</p>
      </div>
      <div class="review">
        <p>"Eating at ClaryCandle was like taking a culinary journey through Nepal. Each dish was bursting with flavor, and the
        presentation was beautiful. The gundruk dhido was especially delightful. The staff was also incredibly friendly and
        attentive. I can't wait to come back on my next visit to UK!" - 
      Sarita Tamang</p>
      </div>
      <div class="review">
        <p>"ClaryCandle has become my go-to spot for traditional Nepali food. The thali set they offer is perfect and reminds me of
        home-cooked meals. I love the atmosphere and the fantastic service. It's a must-visit for anyone craving genuine Nepali
        flavors in a warm, inviting setting." - Sagar Ghimere</p>
      </div>
    </section>
  </main>
 <?php include_once 'footer.php' ?>