<?php include 'patientSession.php';?>

<?php

include("connectToDatabase.php");
$ApptID = $_GET["ID"];
echo $ApptID;
$sql = "DELETE FROM patientmakeappointmentdetails WHERE AppointmentID='".$ApptID."'";
$result = mysqli_query($con, $sql);

$sql2 = "DELETE FROM doctorreceiveappointment WHERE AppointmentID='".$ApptID."'";
$result2 = mysqli_query($con, $sql2);


mysqli_close($con);
header("location:ManageAppointment.php");

?>
