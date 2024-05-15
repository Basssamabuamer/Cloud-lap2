<?php
    extract($_POST);
	include('db/dbCon.php');
	
	$n=mysql_real_escape_string($name);
	$e=mysql_real_escape_string($email);
	$ps=mysql_real_escape_string($password);

    $emA="SELECT `email` FROM `login` WHERE `email` ='$e'";
	$emaA=mysql_query($emA,$db);
	if(mysql_num_rows($emaA) > 0) {
		echo "<script>window.alert('Email address existing, please change it.')</script>";
		echo "<script>window.location='index.php'</script>";
	} else {
        $Insert = "INSERT INTO `login` (`name`, `email`, `pass`) VALUES ('$n','$e','$ps')";
        if(mysql_query($Insert,$db)) {
			echo "<script>window.alert('Registration successful.')</script>";
			echo "<script>window.location='index.php'</script>";
		} else {
			echo "<script>window.alert('Sorry an error occurred, please try again.')</script>";
			echo "<script>window.location='index.php'</script>";
		}
    }
    mysql_close($db);
?>
