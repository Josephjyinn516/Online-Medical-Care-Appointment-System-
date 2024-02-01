<?php
if(isset($_SESSION["userID"])){

    #use to check is it doctor or patient role type, if wrong then return logout.php#
    if($_SESSION["userType"] != "1") {
        echo "<script>alert('You are not the doctor!');window.location.href='logout.php';</script>";
    }

}
#check is user login or not#
else {
    echo "Wrong Session";
    echo "<script>alert('Please go back and login!');window.location.href='login.php';</script>";
}
?>