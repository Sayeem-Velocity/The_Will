<?php 
  session_start();
  include './connection.php';

  if(isset($_post['logout'])){
    session_destroy();
    echo '<script>alert("Logged out successfully!")</script>';
    echo '<script>window.location="index.php"</script>';
    die("Location: index.php");
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABOUT US</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="TW_logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="about.css">

</head>
<body>

<?php include'header1.php'?>

<!--body starts-->

<section class="about-us">
  <div class="about">
    <img src="images1/grp.png" class="pic" />
    <div class="text">
      <h2>About Us</h2>
      <h5>ETE 20,  <span>CUET</span></h5>
      <p>Welcome to <span>THE WILL</span>, where every act of kindness has purpose and every heart touched brings hope. Since April 24, 2023, we've passionately embraced compassion and transformative change. Believing in humanity's ability to uplift one another, we support those facing adversity to ensure no one is left behind. Join our united community, where together, we shine as beacons of light. Your support, whether through donations, volunteering, or spreading hope, is invaluable.
        <span>Thank you</span> for being part of our journey to spread compassion, kindness, and hope across our nation.</p>
      <div class="data">
        <a href="blog1.php" class="hire">Blog</a>
      </div>
    </div>
  </div>
</section>


<!--about ends-->


<!--admin starts-->

<h1>Our Team</h1>
<div class="wrapper">
  <div class="container">
      <input type="radio" name="slide" id="c1" checked>
      <label for="c1" class="card">
          <div class="row">
              <div class="icon">1</div>
              <div class="description">
                  <h4>S.M. SHAHRIAR</h4>
                  <p>ETE || CUET</p>
              </div>
          </div>
      </label>
      <input type="radio" name="slide" id="c2" >
      <label for="c2" class="card">
          <div class="row">
              <div class="icon">2</div>
              <div class="description">
                  <h4>ADIBA SABREEN</h4>
                  <p>ETE || CUET</p>
              </div>
          </div>
      </label>
      <input type="radio" name="slide" id="c3" >
      <label for="c3" class="card">
          <div class="row">
              <div class="icon">3</div>
              <div class="description">
                  <h4>TF KHAN</h4>
                  <p>ETE || CUET</p>
              </div>
          </div>
      </label>
      <input type="radio" name="slide" id="c4" >
      <label for="c4" class="card">
          <div class="row">
              <div class="icon">4</div>
              <div class="description">
                  <h4>MD JUNAYED</h4>
                  <p>ETE || CUET</p>
              </div>
          </div>
      </label>
      <input type="radio" name="slide" id="c5" checked>
      <label for="c5" class="card">
          <div class="row">
              <div class="icon">5</div>
              <div class="description">
                  <h4>Tasnova Islam</h4>
                  <p>ETE || CUET</p>
              </div>
          </div>
      </label>
  </div>
</div>


<!--admin ends-->

<?php include'footer.php'?>

</body>
</html>

