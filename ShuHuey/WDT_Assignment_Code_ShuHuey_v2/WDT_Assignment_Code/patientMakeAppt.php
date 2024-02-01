<?php include 'patientSession.php';?>

<?php
if (isset($_POST["submitbtn"])){
	include("connectToDatabase.php");
	
	// check if hospital == doctor == specialty
	if ($_POST['doctor'] != "") {$hospitalDoctorSpecialty = "SELECT * FROM doctor WHERE Hospital='$_POST[hospital]'
	AND DoctorName='$_POST[doctor]' AND SpecialtyName LIKE '%$_POST[specialty]%'";} else { $hospitalDoctorSpecialty = "SELECT * FROM doctor"; }

	if(!mysqli_query($con,$hospitalDoctorSpecialty))
	{
		die("Error: ".mysqli_error($con));
	} else {
		$hospitalDoctorSpecialty_result = mysqli_query($con,$hospitalDoctorSpecialty);
		if (mysqli_num_rows($hospitalDoctorSpecialty_result) == 0){
			echo "<script>alert('".$_POST['hospital']." does not have ".$_POST['doctor']." who works in ".$_POST['specialty'].
			". Please re-enter the correct information into the appointment form.');
			window.location.href='afterLoginAppointmentForm.php';</script>";
			mysqli_close($con);
		} else {
			if ($_POST['doctor'] != "") {
				$sqlDoctorID = "SELECT DoctorID FROM doctor WHERE DoctorName = '$_POST[doctor]'";
				$result = mysqli_query($con,$sqlDoctorID);
				$DoctorID = mysqli_fetch_array($result)[0];
				$DoctorName = $_POST['doctor'];
			} else {
				$sqlDoctorID = "SELECT DoctorID FROM doctor WHERE SpecialtyName = '$_POST[specialty]' AND Hospital = '$_POST[hospital]'";
				$result = mysqli_query($con,$sqlDoctorID);
				$DoctorID = mysqli_fetch_array($result)[0];

				$sqlDoctorName = "SELECT DoctorName FROM doctor WHERE SpecialtyName = '$_POST[specialty]' AND Hospital = '$_POST[hospital]'";
				$resultDoctorName = mysqli_query($con,$sqlDoctorName);
				$DoctorName = mysqli_fetch_array($resultDoctorName)[0];
			}


			$sql = "INSERT INTO patientmakeappointmentdetails (Hospital, DoctorName, PreferredSpecialty, 
			MedicalConcern, DateChoice, TimeChoice, PatID, ApptStatus) 
			VALUES ('$_POST[hospital]','".$DoctorName."','$_POST[specialty]',
			'$_POST[medicalRequest]','$_POST[inputdate]','$_POST[selectTime]',
			$_SESSION[userID],'Successful')";
			// Appointment Status will always be successful because doctor need to accept the appointment
			//echo $sql;
			
	
			if(!mysqli_query($con,$sql))
			{
				die("Error: ".mysqli_error($con));
			}
			
			
			$sqlAppointmentID = "SELECT AppointmentID FROM patientmakeappointmentdetails ORDER BY AppointmentID DESC LIMIT 1";
			$sqlAppointmentID_result = mysqli_query($con,$sqlAppointmentID);
			$AppointmentID = mysqli_fetch_array($sqlAppointmentID_result)[0];
	
			// to get the appointment id that is newly added
	
			$sql2 = "INSERT INTO doctorreceiveappointment (AppointmentID, AppointedTime, DoctorID, AcceptOrDecline) 
			VALUES ('".$AppointmentID."', '$_POST[selectTime]', '".$DoctorID."','Accept')";
	
			if(!mysqli_query($con,$sql2)){
				die("Error: ".mysqli_error($con));
			} else {
				echo "<script>alert('Appointment Form Successfully Submitted!');window.location.href='ManageAppointment.php'</script>";
			}
	
			mysqli_close($con);
		}
	}
		
}
else {
	echo "<script>alert('Please insert data into Appointment Form!');window.location.href='afterLoginAppointmentForm.php';</script>";
}

?>