<?php
session_start();
if (!isset($_SESSION['DoctorID']))
{
	echo '<script>alert("Please Login!");window.location.href="login.php";</script>';
	//header("location: login.php");
}
?>