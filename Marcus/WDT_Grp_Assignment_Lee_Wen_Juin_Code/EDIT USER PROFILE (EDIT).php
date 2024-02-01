<?php

include("patientSession.php");

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE-edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Edit Profile
        </title>

        <link href="EDIT USER PROFILE.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>

        <link rel="icon" href="Green_House_Care_Real_Estate_Logo.png" type = "image/png" sizes="16x16">

        <!-- Google Font Link for Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    
        <script src="https://kit.fontawesome.com/a534682a13.js" crossorigin="anonymous">

        </script>

    </head>

    <!--Header of the page-->
    <body>
        <header>
            <!--Nav menu (icon)-->
            <ul id="icon">
                <a href="http://localhost/WDT%20Final%20Project/WeiJian/WDTassignment/afterLogin_homepage.php"><img src="Green House Care Real Estate Logo.png" title="Main Menu Homepage"></a>
            </ul>

            <!--Nav menu(about us, doctor info, appointment, user profile)-->

            <ul id="navigationMenu">
            <li><a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/ABOUT%20US%20(Aftr%20login).html" title="About us">About Us</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Doctor%20Info/Doctor.html" title="Doctor Info">Doctor Info</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/ShuHuey/WDT_Assignment_Code_ShuHuey_v2/WDT_Assignment_Code/afterLoginAppointmentForm.php" title="Appointment">Appointment</a></li>
                <li>
                    <a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/EDIT%20USER%20PROFILE%20(DEFAULT).php" title="Username">
                        <i class="fa-solid fa-user fa-2xl"></i>
                    </a>
                </li>
                
            </ul>
            
        </header>
        <?php
        include ("conn.php");
        $id=intval($_GET['x']);
        $result = mysqli_query($con, "SELECT *FROM patient WHERE PatID = $id ");
        while ($row = mysqli_fetch_array($result))
        {
        ?>
        <form action="UP_update.php" method="post">
        <input type="hidden" name="PatID" value="<?php print $row['PatID']?>">

        <div id="Profile Card">
            <div class="pfbox">
                <div class="userIcon">
                    <a href="#">
                    </a>

                </div>

                <div id="Userdetails">
                    <div class="rectUser" title="Edit Guest Name">
                        <a href="#">

                            <input title="Edit Guest Name" type="text" required="required" maxlength="255" name="nm" id="nm" placeholder="Name" value="<?php print $row['PatFullName']?>"/>
                            <i class="fa-solid fa-pen-to-square fa-lg"></i>
                        
                        </a>
                    </div>

                    <div class="rectUser1" title="PatID" id="PatID">
                        <?php
                                
                            print '<p>'.'UID : '.$row['PatID'].'</p>';

                        ?>
                    </div>

                    <div class="rectUser2" title="Edit Guest Email">
                        <a href="#">
                        <input title="Edit User Email" type="text" required="required" maxlength="255" name="email" placeholder="Email" id="email" value="<?php print $row['PatEmailAddress']?>"/>
                        <i class="fa-solid fa-pen-to-square fa-lg"></i>
                        </a>
                    </div>

                    <div class="rectUserIC" title="PatIC">
                        <input title='PatIC' type="text" required="required" maxlength="50" name="IC" placeholder="Patient IC" id="PatIC" value="<?php print $row['PatIC']?>"/>
                        <i class="fa-solid fa-pen-to-square fa-lg"></i>
                    </div>

                    <a href="UP_update.php">
                        <div class="save" title="Save Profile" name="savebtn">
                            <p>
                                Save Profile
                            </p>
                        </div>
                    </a>

                    <input type="submit" name="submitBtn" value="Save Profile" class="save">

                    <a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/USER%20PROFILE.php">
                        <div class="cancel" title="Cancel">
                            <p>
                                Cancel Edit
                            </p>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>

        <div id="userDetails">
            <div class="detailsBox">
                <div class="rectDB1">
                    <p>
                        Gender
                    </p>
                </div>

                <div class="rectDB2">
                    <p>
                        Age
                    </p>
                </div>

                <div class="rectDB3">
                    <p>
                        Telephone No.
                    </p>
                </div>

                <div class="rectDB4">
                    <p>
                        Address
                    </p>
                </div>

                <div class="rectDB5">
                    <p>
                        Password
                    </p>
                </div>

                <div class="rectDB6">
                    <p>
                        Emergency Contact Name
                    </p>
                </div>

                <div class="rectDB7">
                    <p>
                        Emergency Contact No.
                    </p>
                </div>

                <!-- Input for Gender Options -->
                    <select class= "rectContent1" name="Gender" id="Gender" required="required">
                    <option class= "rectContent1" value="">Please select</option>
                    <option class= "rectContent1" value="Male"
                    <?php if($row['PatGender'] == 'Male'){?>
                        selected="selected"
                    <?php } ?>
                    >Male</option>
                    <option class= "rectContent1" value="Female"
                    <?php if($row['PatGender'] == 'Female'){?>
                        selected="selected"
                    <?php } ?>
                    >Female</option>

                <!-- Input for Age  -->
                <input class="rectContent2" type="text" name="age" maxlength="3" placeholder="Patient Age" value="<?php print $row['PatAge']?>"></input>

                <!-- Input for Telephone No. -->
                <div class="rectContent3">
                    <input type="tel" name="Tel_No" id="Tel_No" required="required" placeholder="+000-0000000" maxlength="12" value="<?php print $row['PatPhoneNumber']?>"></input>
                    <i class="fa-solid fa-pen-to-square fa-lg"></i>
                </div>

                <!-- Input for Address -->
                <div class="rectContent4">
                    <input type="address" name="address" id="address" placeholder="Address" value="<?php print $row['PatAddress']?>"></input>
                    <i class="fa-solid fa-pen-to-square fa-lg"></i>
                </div>

                <!-- Input for Password -->
                <div class="rectContent5">
                    <input type="password" name="password" id="password" required="required" placeholder="Password" value="<?php print $row['PatPassword']?>"></input>
                    <i class="fa-solid fa-eye fa-lg" title="Visible" onclick="myFunction()"></i>
                    <div class="rectCP">
                        <p title="Change Password">
                            Change Password
                        </p>
                    </div>
                </div>

                <!-- Input for Emergency Contact Name -->
                <div class="rectContent6a">
                    <input type="text" name="E_contact_name" id="e_contact_name" placeholder="Emergency Contact Name" value="<?php print $row['E_Contact_Name']?>"></input>
                    <i class="fa-solid fa-pen-to-square fa-lg" title="Emergency Contact Name"></i>

                </div>

                <!-- Input for Relationship -->

                <select class="rectContent6b" name="E_Relationship" id="E_Relationship">
                <option class="rectContent6b" value="">Please select</option>
                <option class="rectContent6b" value="Husband"
                <?php if($row['E_Relationship'] == 'Husband'){?>
                    selected="selected"
                <?php } ?>
                >Husband</option>
                <option class="rectContent6b" value="Wife"
                <?php if($row['E_Relationship'] == 'Wife'){?>
                        selected="selected"
                <?php } ?>
                >Wife</option>
                <option class="rectContent6b" value="Son"
                <?php if($row['E_Relationship'] == 'Son'){?>
                        selected="selected"
                <?php } ?>
                >Son</option>
                <option class="rectContent6b" value="Daughter"
                <?php if($row['E_Relationship'] == 'Daughter'){?>
                        selected="selected"
                <?php } ?>
                >Daughter</option>
                <option class="rectContent6b" value="Grandchild"
                <?php if($row['E_Relationship'] == 'Grandchild'){?>
                        selected="selected"
                <?php } ?>
                >Grandchild</option>
                <option class="rectContent6b" value="Guardian"
                <?php if($row['E_Relationship'] == 'Guardian'){?>
                        selected="selected"
                <?php } ?>
                >Guardian</option>

                <!-- Input for Emergency Contact No. -->

                <input type="tel" name="EmergencyContact" id="EmergencyContact" placeholder="+000-0000000" maxlength="12" value="<?php print $row['E_Contact_No']?>"></input>
                <i class="fa-solid fa-pen-to-square fa-lg" title="Emergency Contact Tel"></i>

            </div>  
        </div>
        
    </div>
</form>

<?php
    }
    mysqli_close($con);
?>

<script type="text/javascript">

    function myFunction() 
    {
        var x = document.getElementById("password");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
    }
</script>