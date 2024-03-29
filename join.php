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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Join Us</title>
    <link rel="stylesheet" href="join.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  />
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" />

</head>
<body>

<!--header starts-->
<?php include'header1.php';?>
<!--header ends-->

<div class="head">
  <h2>Join Us</h2>
</div>
<div class="lcard">
  <div class="face front">
      <img src="imagesj/Donation1.png" alt="">
      <h3>Donate</h3>
  </div>
  <div class="face back">
      <h3>Donate</h3>
      <p>Donate today to be a part of the glory,glory of making someone's day,glory of attaining that smile,your every hard earned penny would be used as a ray of light and hope.</p>
      <div class="link">
          <a href="index.php #Product1">Donate Now</a>
      </div>
  </div>
</div>

<div class="lcard">
  <div class="face front">
      <img src="imagesj/volunteering.jpg" alt="">
      <h3>Be a volunteer</h3>
  </div>
  <div class="face back">
      <h3>Be a volunteer</h3>
      <p>Be a part of our journey!Your experience,backbreaking work,assistance,guidance all are much appreciated and valuable in our events accomplishment.</p>
      <div class="link">
          <a href="applicationform.php">Apply Now</a>
      </div>
  </div>
</div>

<div class="lcard">
  <div class="face front">
      <img src="imagesj/media1.jpg" alt="">
      <h3>Share media</h3>
  </div>
  <div class="face back">
      <h3>Share media</h3>
      <p>Even you can be a part of it,all you need to do is share our events,our ideology,our vision to the mass,so that people may turn their WILL of helping others into reality.</p>
      <div class="link">
          <a href="#">Share Now</a>
          </div>
  </div>
</div>



<?php include'footer.php'?>

<!--footer ends-->

</body>
</html>

