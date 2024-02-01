<?php
    include("connMedic.php");
    
    $sql="UPDATE doctor SET
    DoctorName='$_POST[name]',
    DoctorIC='$_POST[ic]',
    DoctorAge='$_POST[age]',
    Gender='$_POST[gender]',
    DoctorEmailAddress='$_POST[mail]',
    Telephone='$_POST[telephone]',
    SpecialtyName='$_POST[spec]',
    DoctorPassword='$_POST[pass]'

    WHERE DoctorID=$_POST[DoctorID];";
    if(mysqli_query($con, $sql)) {
        mysqli_close($con);
        header('Location: viewDocSetting.php');
    }
?>


