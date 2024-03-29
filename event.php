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
    <title>EVENT</title>
    <link rel="icon" type="image/png" href="TW_logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
     
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="event1.css">

</head>
<body>

<?php include'header1.php';?>

<?php include'event1.php';?>
<?php include'event2.php';?>
<?php include'event3.php';?>


<?php include'footer.php'?>

</body>
</html>

