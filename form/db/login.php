<?php
session_start();
include('db/dbCon.php');
extract($_POST);

if(empty($username)){
    header("Location:  index.php?erro=User Name is required");
    exit();
}
elseif (empty($password)) {
    header("Location:  index.php?erro=Password is required");
    exit();
}

// customer
$cus="SELECT `name`,`email` FROM `login` WHERE  `email` = '$username' AND  `pass` = '$password'";
$cust=mysql_query($cus,$db);
if(mysql_num_rows($cust) > 0) {
    $customer=mysql_fetch_array($cust);
    $_SESSION["name"]=$customer[0];
    $_SESSION["email"]=$customer[1];
    echo '<script>window.location="login/Home.html"</script>';
} else {
    echo '<script>window.alert("Email or password not valid")</script>';
    echo '<script>window.location="index.php"</script>';
}
mysql_close($db);
