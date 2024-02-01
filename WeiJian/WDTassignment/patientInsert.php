<?php

    include("connectToDatabase.php");

    #check whether the email registered or not#
    if(isset($_POST["signup"])){
    $sql = "SELECT * FROM patient WHERE PatEmailAddress = '" . $_POST["registerEmail"] . "'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    
    #if it registered#
    if($row) {
        echo "<script>alert('This account is already existed');
        window.location.href='signup.html';
        </script>";
        return false;
    #if not registered#
    }else{
        $sql1 = "INSERT INTO logincredential (Email, Password, Type)
        
        VALUES

        ('$_POST[registerEmail]','$_POST[registerPass1]','0')";

        $fire = mysqli_query($con, $sql1) or die('Error: ' . mysqli_error($con));
        if($fire==1){

        $sql2="INSERT INTO patient (LoginID, PatFullName, PatAge, PatGender, PatIC, PatPhoneNumber, PatEmailAddress, PatPassword, PatAddress, E_Contact_Name, E_Relationship, E_Contact_No)
            
        VALUES
        
        ((SELECT LoginID FROM logincredential WHERE Email= '" . $_POST["registerEmail"] . "'),'$_POST[registerName]','$_POST[registerAge]','$_POST[registerGender]','$_POST[registerIC]','$_POST[registerPhone]','$_POST[registerEmail]','$_POST[registerPass1]', '', '', '', '0')";

        $fire2 = mysqli_query($con, $sql2) or die('Error: ' . mysqli_error($con));
        if($fire2){
            echo '<script>alert("Sign Up Successful!");
            window.location.href= "completeSignup.html";
            </script>';
        }
        }
        mysqli_close($con);
    }

    }

?>