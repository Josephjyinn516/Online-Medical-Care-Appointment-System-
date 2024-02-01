<?php
include("connMedic.php");
$id=$_GET['id'];
$result = mysqli_query($con, "SELECT * FROM doctor WHERE DoctorID=$id");

if(isset($_POST['submit'])){
    $DoctorName=$_POST['name'];
    $DoctorIC=$_POST['ic'];
    $DoctorAge=$_POST['age'];
    $Gender=$_POST['gender'];
    $DoctorEmailAddress=$_POST['mail'];
    $Telephone=$_POST['telephone'];
    $SpecialtyName=$_POST['spec'];
    $DoctorPassword=$_POST['pass'];

    $sql = "UPDATE doctor SET DoctorID=$id, DoctorName=$name, DoctorAge=$age, DoctorIC=$ic,";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "updated successfully";
        header('location:viewDocSettings.php');
    }
    else {
        die(mysqli_error($con));
    }
}


