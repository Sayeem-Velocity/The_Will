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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Method</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="TW_logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" />
    
    <link rel="stylesheet" href="payment.css">

</head>

<body>



<!--Font Awesome CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
    <div class="title">
        <h4>Select a <span style="color: #6064b6">Payment</span> method</h4>
    </div>

    <form action="#">
        <input type="radio" name="payment" id="Nagad">
        <input type="radio" name="payment" id="bKash">
        <input type="radio" name="payment" id="ROCKET">
        <input type="radio" name="payment" id="MCASH">


        <div class="category">
            <label for="Nagad" class="NagadMethod">
                <div class="imgName">
                    <div class="imgContainer Nagad">
                        <img src="nagad-logo.png" alt="">
                    </div>
                    <span class="name">Nagad</span>
                </div>
                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
            </label>

            <label for="bKash" class="bKashMethod">
                <div class="imgName">
                    <div class="imgContainer bKash">
                        <img src="bkash-logo.png" alt="">
                    </div>
                    <span class="name">bKash</span>
                </div>
                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
            </label>

            <label for="ROCKET" class="ROCKETMethod">
                <div class="imgName">
                    <div class="imgContainer ROCKET">
                        <img src="rocket-logo.png" alt="">
                    </div>
                    <span class="name">ROCKET</span>
                </div>
                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
            </label>

            <label for="UPAY" class="UPAYMethod">
                <div class="imgName">
                    <div class="imgContainer UPAY">
                        <img src="upay-logo.jpg" alt="">
                    </div>
                    <span class="name">UPAY</span>
                </div>
                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
            </label>
        </div>
    </form>
</div>



</body>
</html>