<?php 
  session_start();
  include './connection.php';

  if(isset($_POST['logout'])){
    session_destroy();
    echo '<script>alert("Logged out successfully!")</script>';
    echo '<script>window.location="index.php"</script>';
    die("Location: index.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="TW_logo.png" />
    <link rel="stylesheet" href="dropdown.css" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>THE WILL</title>
  </head>

  <body>

    <!--home section ends here-->
    <?php include'header.php'?>
  <!--cards starts-->

    <section id="Product1" class="section-p1">
      <h2>Purposes of The Will</h2>
      <!-- <p>##</p> -->
      <div class="pro-container">
        <div class="pro">
          <img src="card img/hungry1.jpg" alt="" />
          <div class="des">
            <span>1.Pay for a meal</span>
            <h5>Feed hungry stomachs to save them from starvation.</h5>
            <h4>৳150/Person</h4>
          </div>
          <div class="button"><a href="donationform1.php">Donate ৳150</a></div>
              
        </div>

        <div class="pro">
          <img src="card img/planting.jpg" alt="" />
          <div class="des">
            <span>2.Plant a tree </span>
            <h5>Plant trees to save our nature from getting nonexistent.</h5>
            <h4>৳100/Plant</h4>
          </div>
          <div class="button"><a href="./donationform1.php">Donate ৳100</a></div>
          <!-- <a href="./donationform1.php"><i class="fa fa-cart-plus cart"></i></i></a> -->
              
        </div>

        <div class="pro">
          <img src="card img/edu (1).jpg" alt="" />
          <div class="des">
            <span>3.Be the light for education</span>
            <h5>Spread the light of education in those dark alleys.</h5>
            <h4>৳200/Children</h4>
          </div>
          <div class="button"><a href="./donationform1.php">Donate ৳200</a></div>
          <!-- <a href="./donationform1.php"><i class="fa fa-cart-plus cart"></i></i></a> -->
              
        </div>

        <div class="pro">
          <img src="card img/employ.jpg" alt="" />
          <div class="des">
            <span>4.Help them get employed</span>
            <h5>Help us to add wings to their future employment.</h5>
            <h4>৳500/Family</h4>
          </div>
          <div class="button"><a href="./donationform1.php">Donate ৳500</a></div>
          <!-- <a href="./donationform1.php"><i class="fa fa-cart-plus cart"></i></i></a> -->
              
        </div>

        <div class="pro">
          <img src="card img/d_orp.jpg" alt="" />
          <div class="des">
            <span>5.Fund for orphanage</span>
            <h5>Be their family not by ‘Blood’ but by ‘Bond’.</h5>
            <h4>৳200/Person</h4>
          </div>
          <div class="button"><a href="./donationform1.php">Donate ৳200</a></div>
          <!-- <a href="./donationform1.php"><i class="fa fa-cart-plus cart"></i></i></a> -->
              
        </div>

        <div class="pro">
          <img src="card img/happy.jpg" alt="" />
          <div class="des">
            <span>6.Share happiness</span>
            <h5>Let’s multiply our happiness by sharing it with people.</h5>
            <h4>৳100/Person</h4>
          </div>
          <div class="button"><a href="./donationform1.php">Donate ৳100</a></div>
          <!-- <a href="./donationform1.php"><i class="fa fa-cart-plus cart"></i></i></a> -->
        </div>

        <div class="pro">
          <img src="card img/animal1.jpg" alt="" />
          <div class="des">
            <span>7.Animal aid</span>
            <h5>Be their savior in this cruel world.</h5>
            <h4>৳100/Animal</h4>
          </div>
          <div class="button"><a href="./donationform1.php">Donate ৳100</a></div>
          <!-- <a href="./donationform1.php"><i class="fa fa-cart-plus cart"></i></i></a> -->
        </div>

        <div class="pro">
          <img src="card img/dis (1).jpg" alt="" />
          <div class="des">
            <span>8.Provide healthcare</span>
            <h5>Help us provide medical aids and kits.</h5>
            <h4>৳500/Person</h4>
          </div>
          <div class="button"><a href="./donationform1.php">Donate ৳500</a></div>
          <!-- <a href="./donationform1.php"><i class="fa fa-cart-plus cart"></i></i></a> -->
        </div>

        <div class="pro">
          <img src="card img/crisis.jpg" alt="" />
          <div class="des">
            <span>9.Humanity in crisis</span>
            <h5>When crises strengthenbond.</h5>
            <!-- <div class="star">
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
    </div> -->
            <h4>৳300</h4>
          </div>
          <div class="button"><a href="./donationform1.php">Donate ৳300</a></div>
          <!-- <a href="./donationform1.php"><i class="fa fa-cart-plus cart"></i></i></a> -->
        </div>
      </div>
    </section>

    <!--card ends-->

    <!--footer starts-->

    <?php include 'footer.php'?>
    <!--footer ends-->
  </body>
</html>
