

<?php
session_start();
error_reporting(0);
include('db/dbCon.php');

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
	    $pass=$_POST['pass'];

    $query=mysqli_query($con,"select email,pass from login where  email='$email' && pass='$pass'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['email']=$ret['email'];
     header('location:Home.html');
    }
    else{
     echo "<script>alert('ليس لديك صلاحيات للدخول اتصل بالمسؤول');</script>";   
   echo "<script>window.location.href='index.php'</script>";
    }
  }
  ?>

