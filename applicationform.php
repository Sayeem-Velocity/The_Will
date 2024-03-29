<?php 
  include './connection.php';
?>

<?php
  if (isset($_SESSION['email'])) {
    echo '<script>alert("Please log out at first")</script>';
    echo '<script>window.location="./index.php"</script>';
    die("Location: index.php");
  }

  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['name'];
    $email = $_POST['email'];
		$phone_number = $_POST['phone'];
    $birth_date = $_POST['birthday'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    // $field_of_interest = $_POST['field'];
    // $preference = $_POST['perference'];
    $case_description = $_POST['description'];

    $query1 = "Select *from user Where email = '$email' limit 1";
    $result = mysqli_query($con, $query1);
    
    if(!empty($user_name) && !empty($email) && !empty($phone_number) && !empty($birth_date) && !empty($gender) && !empty($address) && !empty($case_description) && !is_numeric($user_name)){
      if($result){
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['email'] === $email){
          echo '<script>alert("This email has already been used") </script>';
        }else{
          $query = "Insert into user(name , email , phone , birthday , gender , address , description) values('$user_name' , '$email' ,  '$phone_number',  '$birth_date',  '$gender',  '$address', '$case_description')";
          mysqli_query($con , $query);
          // header("Location: ./login.php");
          echo"An SMS would be sent to your phone number soon.";
        }
      }
    }else{
      echo '<script>alert("Please enter valid information")</script>';
    }
  }
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  />
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="applicationform.css" />
  </head>
  <body>

<!--header starts-->
<?php include'header1.php';?>
<!--header ends-->

<!-- <input type="text" placeholder="Name" name="name">
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="pass"> -->
                    
    <section class="container">
      <header>Application Form</header>
      <form action="#" class="form" method="POST">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="name" />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email" />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="phone" />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="birthday" />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter address" name="address" />
          <!--<input type="text" placeholder="Enter street address line 2" required />-->
          <!-- <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Field of interest</option>
                <option>Educational</option>
                <option>Animal Aid</option>
                <option>Healthcare</option>
                <option>Food security</option>
                <option>Orphanage</option>
                <option>Tree plantation</option>
              </select>
            </div>
            <div class="select-box">
                <select>
                  <option hidden>Preference</option>
                  <option>On-campus</option>
                  <option>Outdoor</option>
                </select>
              </div>
          </div> -->
          <div class="column">
            <input type="text" placeholder="Case Description" name="description" />
            <!-- <input type="number" placeholder="Enter postal code" required /> -->
          </div>
        </div>
        <button>Submit</button>
        <!-- <button type="submit" value="signup">Sign Up</button> -->
      </form>
    </section>

<!--footer starts-->

<?php include'footer.php'?>

<!--footer ends-->
<script>
container.classList.add("active");
</script>

  </body>
</html>

