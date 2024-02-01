<?php
if (isset($_POST["savebtn"]))
{
    include("conn.php");

    $sql = "INSERT INTO User_Name, User_email, Gender, Birthday, Telephone_No, Address, Password, E_Contact_Name, E_Relationship, E_Contact_No) VALUES 
    ('$_POST[nm]', '$_POST[email]', '$_POST[Gender]', '$_POST[dob]', '$_POST[Tel_No]', 
    '$_POST[address]', '$_POST[password]', '$_POST[e_contact_name]', '$_POST[Relationship]', '$_POST[EmergencyContact]')";

    if (!mysqli_query($con, $sql))
    {
        die("Error : ".mysqli_error($con));
    }
    else
    {

        echo '<script>alert("Record Added!");
        window.location.href="USER PROFILE.php";</script>';
    }
    mysqli_close($con);
}
else {
    echo "<script>alert('Please insert data!');
    window.location.href='EDIT USER PROFILE (DEFAULT).php';</script>";
}

?>