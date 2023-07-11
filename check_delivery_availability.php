 <?php
 require_once 'config.php'; 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
   $postcode = $_POST['postcode'];
   
   $sql = "SELECT * FROM deliveries WHERE postcode = '$postcode' AND is_available = 1";
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
     echo "Good news! We deliver to your area.";
    } else {
      echo "Sorry, we do not currently deliver to your area.";
    }
    
    $conn->close();
  }
 ?>