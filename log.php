<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="./main.css">
    <script src="https://kit.fontawesome.com/6d2017dc73.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="hader">
        <h1> <i class="fas fa-gem me-3"></i>Labrotary information system (LIS)</h1>
        </div>
        <form class="form"  action="login.php" method="post"id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="email" autofocus placeholder=" E-mail">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="pass" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" name="submit1" type="submit" >LOG IN</button>
            <!-- <p class="form__text">
                <a href="./login.html"  class="form__link">Forgot your password?</a>
            </p> -->
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" name="name" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="email" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="pass" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <!-- <div class="form__input-group"> -->
                <!-- <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div> -->
            <!-- </div> -->
            <button class="form__button" name="submit2" type="submit">SIGN UP</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    <script src="./main.js"></script>
</body>


<?php

if(isset($_POST['submit1'])){
  $email=$_POST['email'];
    $pass=$_POST['pass'];

$host="localhost";
$user="root";
$pass="rootroot";
$dbName="labproject";
$conn=mysqli_connect($host,$user,$pass,$dbName);

$query="SELECT * FROM `login` WHERE email='$email' and pass='$pass'";

$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0 ){

      echo "<script>
	 
                window.location.href = 'home.html';
            </script>";
}

	
else{
	?>
	<script>
		alert("Email or user name is not correct");
	</script>
	<?php
}
	}

?>






<?php
$host="localhost";
$user="root";
$pass="rootroot";
$dbName="labproject";
$conn=mysqli_connect($host,$user,$pass,$dbName);

	if(isset($_POST['submit2'])){
        $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
       

$query="INSERT INTO `login`(`name`, `email`, `pass`) VALUES ('$name','$email','$pass') ";
$result= mysqli_query($conn,$query);
if($result){
   

		   echo "<script>
                window.location.href = 'log.php';
            </script>";
}
}
    ?>

