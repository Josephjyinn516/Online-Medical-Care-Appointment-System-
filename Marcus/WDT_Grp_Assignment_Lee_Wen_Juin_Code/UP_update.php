<?php
include("conn.php");

$sql ="UPDATE patient SET
PatFullName='$_POST[nm]',
PatEmailAddress='$_POST[email]',

PatGender='$_POST[Gender]',
PatAge='$_POST[age]',
PatIC='$_POST[IC]',
PatPhoneNumber='$_POST[Tel_No]',
PatAddress='$_POST[address]',
PatPassword='$_POST[password]',
E_Contact_Name='$_POST[E_contact_name]',
E_Relationship='$_POST[E_Relationship]',
E_Contact_No='$_POST[EmergencyContact]'

WHERE PatID=$_POST[PatID];";

echo $sql;

if (mysqli_query($con, $sql)){
    mysqli_close($con);
    header("Location:USER%20PROFILE.php");
}

?>