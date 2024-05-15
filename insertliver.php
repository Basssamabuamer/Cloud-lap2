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
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname']; 
$thirdName = $_POST['Thirdname']; 
$familyName = $_POST['Familyname']; 
$nationalId = $_POST['NatId'];
$address =  $_POST['address'];
$contactNumber = $_POST['phone'];  
$email =  $_POST['email'];
$gender =  $_POST['gender']; 
$birthday =  $_POST['birthday'];
$Governorate =  $_POST['Governorate'];
$COVID_Test =  $_POST['COVID-19Test'];


// (Firstname,Lastname,Address,contactNamber,Message)

$sqlquery = "INSERT INTO HomeAppointement VALUES
	('$firstName', '$lastName','$thirdName', '$familyName' , '$address','$contactNumber' , '$email' , '$nationalId' , '$birthday' ,  '$Governorate' , '$COVID_Test' , '$gender')";

if ($conn->query($sqlquery) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
