<?php

$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "labproject";



// Create connection
$conn = mysqli_connect($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
$firstName = $_POST['name'];
$lastName = $_POST['email'];
$address =  $_POST['address'];
$contactNumber = $_POST['contact']; 
$Mss =  $_POST['message'];

// (Firstname,Lastname,Address,contactNamber,Message)

$sqlquery = "INSERT INTO contact VALUES
	('$firstName', '$lastName','$address','$contactNumber','$Mss')";

if ($conn->query($sqlquery) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
