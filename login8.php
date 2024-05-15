<?php


include 'User.php';

$user = new User('php_login_system', '127.0.0.1', 'root', 'root');

$username = $_POST['username'];
$password = $_POST['password'];

if ($user->exists($username, $password)) {
    $_SESSION['login'] = true;
    header("Home.html");
} else {
    header("index.php?message=".urlencode('incorrect username or password'));
    exit();
}

// session_start();
// include "db_conn.php";
// if (isset($_POST['uname']) && isset($_POST['password'])){
//     function validate($data){

//         $data= trim($data);
//         $data= stripslashes($data);
//         $data= htmlspecialchars($data);
//         return data;

//     }
// }
// $uname = validate($_POST['uname']);
// $pass= validate($_POST['password']);

// if(empty($uname)){
//     header("Location:  index.php?erro=User Name is required");
//     exit();
// }
// elseif (empty($pass)) {
//     # code...
//     header("Location:  index.php?erro=Password is required");
//     exit();
// }
// $sql="SELECT * FROM users WHERE user_name '$uname' AND password='$pass'";
// $result = mysqli_query($conn, $sql);

// if ($mysqli_num_rows($result)===1) {
//     # code...
//     $row = mysqli_fetch_assoc($result);
//     if ($row['user-name']===$uname && $row['$password']===$pass) {
//         echo "Logged in!";
//         # code...
//         $_SESSION['user_name']= $row['user_name'];
//         $_SESSION['name']= $row['name'];
//         $_SESSION['id']= $row['id'];
//         header("Location: Home.html");
//         exit();

//     }
//     else{
//         header("Location: index.php?erro=Incorrect User Name or password");
//         exit();
//     }
// }
// else{
//     header("Location: Home.html");
//     exit();
// }