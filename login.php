
<?php 
  include './connection.php';

  if(isset($_POST['logout'])){
    session_destroy();
    echo '<script>alert("Logged out successfully!")</script>';
    echo '<script>window.location="index.php"</script>';
    die("Location: index.php");
  }
?>

<?php

  session_start();

  if (isset($_SESSION['email'])) {
    echo '<script>alert("Please log out at first")</script>';
    echo '<script>window.location="./index.php"</script>';
    die("Location: ./index.php");
  }

  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    $email = $_POST['email'];
		$password = $_POST['pass'];

    
    if(!empty($email) && !empty($password) && !is_numeric($email)){
      $query1 = "Select *from user Where email = '$email' limit 1";
      $result = mysqli_query($con, $query1);

      if($result){
        if(mysqli_num_rows($result) > 0){
          
          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['email'] === $email && $user_data['password'] === $password){
            
            $_SESSION['email'] = $email;
            // $_SESSION['username'] = $user_data['username'];
            header("Location: ./index.php");
            die;

          }else{
            echo'<script>alert("Wrong email or password")</script>';
          }
        }
      }
    }else{
      echo '<script>alert("Please enter valid information")</script>';
      echo'<script>window.location="login.php"<\script>';
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/png" href="TW_logo.png">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <title>Log In</title>
</head>

<body>
   
    <?php include'header1.php';?>


    <!-- <div class="col"> -->
        <ul class="social">
          <!-- <li>
            <a href="index1.html" class="icon"><i class="fa-solid fa-house"></i></a>
          </li> -->
          <!-- <li>
            <a href="index1.html" class="icon"><i class="fa-solid fa-house-chimney"></i></a>
          </li> -->
        </ul>
      <!-- </div> -->
        <!-- <br> -->
        <div class="container" id="container">
            
            <div class="form-container sign-in">
                <form method = "post">
                    <h1>Log In</h1>
                    <div class="social-icons">
                        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email password</span>
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="pass">
                    <a href="#">Forget Your Password?</a>
                    <button>Log In</button>
                    <div class="register-link">
                <p>Don't have an account?<a href="signup.php">Register</a></p>
            </div>
                </form>
            </div>
        </div>



    <!--footer starts-->

    <?php include'footer.php';?>
  
  <!--footer ends-->

</body>

</html>