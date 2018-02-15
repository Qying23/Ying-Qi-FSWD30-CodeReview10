<?php

 ob_start();

 session_start(); // start a new session or continues the previous

 if( isset($_SESSION['Users'])!="" ){
  header("Location: home.php"); // redirects to home.php
 }

 include_once 'dbconnect.php';

 $error = false;

 if ( isset($_POST['btn-signup']) ) {

 
  // sanitize user input to prevent sql injection
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);

  $firstName = trim($_POST['firstName']);
  $firstName = strip_tags($firstName);
  $firstName = htmlspecialchars($firstName);

  $lastName = trim($_POST['lastName']);
  $lastName = strip_tags($lastName);
  $lastName = htmlspecialchars($lastName);

  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  // basic username validation
  if (empty($name)) {

   $error = true;
   $nameError = "Please enter your username.";
  } else if (strlen($name) < 1) {
   $error = true;
   $nameError = "Name must have atleat 1 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }

  // basic firstname validation
  if (empty($firstName)) {

   $error = true;
   $firstNameError = "Please enter your full firstname.";
  } else if (strlen($firstName) < 1) {
   $error = true;
   $firstNameError = "firstname must have atleat 1 characters.";
   } else if (!preg_match("/^[a-zA-Z ]+$/",$firstName)) {
    $error = true;
    $firstNameError = "firstname must contain alphabets and space."; 
 } else {
    $error = false;
    $firstNameError = "";
  }

   // basic lastname validation
  if (empty($lastName)) {

   $error = true;
   $lastNameError = "Please enter your full lastname.";
  } else if (strlen($lastName) < 1) {
   $error = true;
   $lastNameError = "Name must have atleat 1 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$lastName)) {
   $error = true;
   $lastNameError = "Name must contain alphabets and space.";
  }

  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {

   // check whether the email exist or not
   $query = "SELECT email FROM Users WHERE email='$email'";

   $result = mysqli_query($conn, $query);
   $count = mysqli_num_rows($result);

   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";

   }
  }


  // password validation

  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {

   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }

  // password encrypt using SHA256();
  $password = hash('sha256', $pass);


  // if there's no error, continue to signup
  if( !$error ) {

   $query = "INSERT INTO Users(username, firstName,lastName,email,user_password) VALUES('$name','$firstName','$lastName','$email','$password')";

   $res = mysqli_query($conn, $query);


   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";

    unset($name);
    unset($email);
    unset($pass);

   } else {

    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later...";

}
   }

  }

?>

<!DOCTYPE html>

<html>
  <head>
  <title>Login & Registration System</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <link href="https://fonts.googleapis.com/css?family=Exo+2|Grand+Hotel|Libre+Franklin|Sacramento" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <style>
    html{
      background-color:#EFF8FB;
    }
    h1{
    color: black;
    padding: 40px;
    text-align: center;
  }
  body{
    background-image: url("http://www.maria-laach.de/assets/components/phpthumbof/cache/jesuitenbibliothek_158.d91648d5792bcc59a9e337e4070c4934.jpg");
  }
  .reg{
      background-color: rgba(255,255,255,0.6);
      padding: 10%;
      margin-top: 30px;
    }

  </style>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <header>
      <div class="navbar navbar-expand-md bg-info navbar-dark">
      <a class="navbar-brand name" href="media.html" >
        <h1>the Big Library</h1>
      </a>
    </div>

    </header><!-- /header -->

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-6 offset-6 reg">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

               <h2>Sign Up.</h2>
               <hr />


                <?php
                 if ( isset($errMSG) ) {
                  ?>


              <div class="alert">

                <?php echo $errMSG; ?>
                       </div>
                <?php
             }
             ?> 

                <input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
                  <span class="text-danger"><?php echo $nameError; ?></span>
    
                 <input type="text" name="firstName" class="form-control" placeholder="Enter firstName" maxlength="50" value="<?php echo $firstName ?>" />
                    <span class="text-danger"><?php echo $firstNameError; ?></span>

                 <input type="text" name="lastName" class="form-control" placeholder="Enter lastName" maxlength="50" value="<?php echo $lastNamen ?>" />
                    <span class="text-danger"><?php echo $lastNameError; ?></span>


                 <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
                    <span class="text-danger"><?php echo $emailError; ?></span>
             

                 <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />

            
                    <span class="text-danger"><?php echo $passError; ?></span>

                 <hr />

                 <button type="submit" class="btn btn-block btn-warning" name="btn-signup">Sign Up</button>

                 <hr />

                 <a href="index.php">Sign in Here...</a>

             </form>

          
        </div>
        
      </div>
      
    </div>

    <footer class="bg-info">
      
      <center>copyright by Ying Qi 2018</center>
      
    </footer>
  </body>
</html>

<?php ob_end_flush(); ?>