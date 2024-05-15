
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
session_start();
error_reporting(0);

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
	    $pass=$_POST['pass'];

    $query=mysqli_query($db,"select id,email,pass from login where  email='$email' and pass='$pass'");

    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['aid']=$ret['id'];

     header('location:Home.php');
    }
    else{
     echo "<script>alert('ليس لديك صلاحيات للدخول اتصل بالمسؤول');</script>";   
   echo "<script>window.location.href='index.php'</script>";
    }
  }
  ?>
 
  
<!-- <!DOCTYPE html>
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
        <form class="form"  action="Home.html" method="post">
            <h1 class="form__title">Login</h1>
        
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username or email">
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" >LOG IN</button>
           
        </form>
        
       
</body> -->
<!doctype html>
<html>
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
                                <form method="post">

            <h1 class="form__title">Login</h1>
        
            <div class="form__input-group">
                <input type="text" name="email" class="form__input" autofocus placeholder="Username or email">
            </div>
            <div class="form__input-group">
                <input type="password" name="pass" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="login" >LOG IN</button>
           <p class="form__text">
                <a class="form__link" href="signup1.php" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
	
        
<!-- <form action="login.php" method="post">
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <div class="relative bg-white pt-10 pb-8 px-10 shadow-xl mx-auto w-96 rounded-lg">
            <div class="divide-y divide-gray-300/50 w-full">
                <div class="space-y-6 py-8 text-base  text-gray-600"> -->

                    <?php if (isset($_GET['message'])): ?>
                        <p class="text-sm text-red-500"><?= $_GET['message']; ?></p>
                    <?php endif; ?>

                    <!-- <h1> <i class="fas fa-gem me-3"></i>Labrotary information system (LIS)</h1>
                    <div class="space-y-4 flex flex-col">
                        <input type="text"
                               name="username"
                               placeholder="Username"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                        <input type="password"
                               name="password"
                               placeholder="Password"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>
                    </div>
                </div>
                <div class="pt-8 text-base font-semibold leading-7">
                    <button type="submit" class="bg-sky-500 hover:bg-sky-600 px-4 py-1 text-white rounded">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </div>
</form> -->

                    <div>
                    
</body>
</html>
