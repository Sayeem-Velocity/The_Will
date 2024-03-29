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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="TW_logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="about1.css"/>
    <link rel="stylesheet" href="donationform.css" />
    <script>
      function mult(value){
  var x,y;
  x=150*value;
  y=150*value;
  document.getElementById('output150x').value=x;
  document.getElementById('netoutput150x').value=y;
  
      }
  </script>
  </head>
  <body>


  <?php include'header1.php'?>
    
    <section class="container">
      <header>Donation Form(Pay for a meal)</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Donor Name</label>
          <input type="text" placeholder="Enter full name" required />
        </div>

        <!-- <div class="input-box">
          <label> Email Address</label>
          <input type="text" placeholder="Enter email address" required />
        </div> -->

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Date of Donation</label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="input-box address">
          
           <label for="">Enter quantity </label>
           <input type="text" placeholder="Enter Quantity" required onkeyup="mult(this.value);">
           <br><br>
           <div class="column">
            <label for="">Amount
              (150৳/meal)</label>
    <input type="text" id="output150x" name="" readonly>
    <br><br>
           <label for="">Net Amount(৳)</label>
           <input type="text" id="netoutput150x" name="" readonly>
          </div>
      </div>
        <button><a href="paymet.html">Proceed</a></button>
        
      </form>
    </section>

<!--footer starts-->

<?php include'footer.php'?>

<!--footer ends-->

  </body>
  </html>