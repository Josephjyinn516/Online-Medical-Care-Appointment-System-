<?php
session_start();

if(isset($_SESSION["LoginID"])){
	if ($_SESSION["Type"] != "0") {
		echo "<script>alert('You are not a customer!');window.location.href='logout.php';</script>";
	}
	echo $_SESSION["LoginID"] . " " . $_SESSION["Email"] . 
    "Customer=0 , Doctor=1 ;;;;; Role Type: ".$_SESSION["Type"];
}
else {
	echo "session not set";
	echo "<script>alert('Please Login!');window.location.href='login.php';</script>";
}


?>
<a href="logout.php">Logout</a>