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
    <link rel="stylesheet" href="faq.css" />
    <script src="faq.js" defer></script>
    <title>FAQ</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="TW_logo.png"/>
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

    <div class="containerFluid">
        <h1>Frequently Asked Questions(FAQs)</h1>
       
      
        <div class="accordion">
          <div class="icon"></div>
          <h5>Where do we organize our events?</h5>
        </div>
        <div class="panel">
          <p>
            Mostly,as it is a department based platform,our campus and its progression is given the first priority,other than that different on-site events are held on different occasions such as winter,EID etc.
          </p>
        </div>
        <div class="accordion">
          <div class="icon"></div>
          <h5>What is the role of the volunteers? </h5>
        </div>
        <div class="panel">
          <p>
            Volunteers run event activities,from managing administrative permissions to buying necessaries,distributing goods,field works,everything is included in volunteering.
          </p>
        </div>
        <div class="accordion">
          <div class="icon"></div>
          <h5>How do I start the application process for volunteering?</h5>
        </div>
        <div class="panel">
          <p>
            Click on the link that says "Be a volunteer" on our page,fill the required form & submit.After then,our team will review your form and contact you to let you know whether you will be a part of the next event or not.
          </p>
        </div>
        <div class="accordion">
          <div class="icon"></div>
          <h5>What are the methods of payment?</h5>
        </div>
        <div class="panel">
          <p>
            We try to be flexible, so we currently accept online payments through Bkash, ROCKET, Nagad. 
          </p>
        </div>
      
        <div class="accordion">
          <div class="icon"></div>
          <h5>Is there any way to keep track of my donations?</h5>
        </div>
        <div class="panel">
          <p>
            Yep! When you give through THE WILL, we'll you ask to share a few pieces of information with us, like your name and email address, so we can create a profile for you. This profile will allow you to keep track of your donation history.
          </p>
        </div>
      
        <div class="accordion">
          <div class="icon"></div>
          <h5>I forgot my password. How do I find it?</h5>
        </div>
        <div class="panel">
          <p>
            It's very easy for you to reset it yourself. Click the link on our site that says "Login." When you do, enter your email address and click "Forgot your password?" Our system will then send you an email with a link that will allow you to choose a new password for your account.  The link in the email is only valid for 24 hours.
          </p>
        </div>
      </div>
 
<!--footer starts-->

<?php include'footer.php'?>

<!--footer ends-->
     
  </body>
    
</html>