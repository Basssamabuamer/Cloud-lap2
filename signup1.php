
<?Php
$host_name = "localhost";
$database = "labproject"; // Change your database name
$username = "root";// Your database user id 
$password = "rootroot";          // Your password

//error_reporting(0);// With this no error reporting will be there
//////// Do not Edit below /////////

$db = mysqli_connect($host_name, $username, $password, $database);
$db->set_charset("utf8");
   mysqli_query($db, "SET SESSION time_zone = 'Asia/amman'");
if (!$db) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    exit;
}
?>
<?php
if(isset($_POST['signup']))
  {
	
	
	    $n=$_POST['name'];

    $e=$_POST['email'];
	    $p=$_POST['pass'];
	    $query=mysqli_query($db,"SELECT `email` FROM `login` WHERE `email` ='$e'");
    $ret=mysqli_fetch_array($query);

    if($ret>0){
		echo "<script>window.alert('Email address existing, please change it.')</script>";
		echo "<script>window.location='signup1.php'</script>";
	} else {
		$query=mysqli_query($db,"INSERT INTO `login` (`name`, `email`, `pass`) VALUES ('$n','$e','$p')");
        if($query){
			
			echo "<script>window.alert('Registration successful.')</script>";
			echo "<script>window.location='signup1.php'</script>";
		} else {
			echo "<script>window.alert('Sorry an error occurred, please try again.')</script>";
			echo "<script>window.location='signup1.php'</script>";
		}
    } }
	
?>
<DOCTYPE html>
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
        <h1> <i class="fas fa-gem me-3"></i>CLOUD LAP</h1>
        </div>

                                <form method="post">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" name="name" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" name ="email" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="pass" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
           
            <button class="form__button" type="submit" name="signup">SIGN UP</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    <script src="./main.js"></script>
</body>