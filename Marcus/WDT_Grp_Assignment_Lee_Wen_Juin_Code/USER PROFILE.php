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
            User Profile
        </title>

        <link href="USER PROFILE.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>

        <link rel="icon" href = "Green_House_Care_Real_Estate_Logo.png" type = "image/png" sizes="16x16">

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
                <a href="http://localhost/WDT%20Final%20Project/WeiJian/WDTassignment/afterLogin_homepage.php"><img src="Green_House_Care_Real_Estate_Logo.png" title="Main Menu Homepage"></a>
            </ul>

            <!--Nav menu(about us, doctor info, appointment, user profile)-->

            <ul id="navigationMenu">
            <li><a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/ABOUT%20US%20(Aftr%20login).php" title="About us">About Us</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Doctor%20Info/Doctor.php" title="Doctor Info">Doctor Info</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/ShuHuey/WDT_Assignment_Code_ShuHuey_v2/WDT_Assignment_Code/afterLoginAppointmentForm.php" title="Appointment">Appointment</a></li>
                <li>
                <a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/USER%20PROFILE.php" title="Username">
                        <i class="fa-solid fa-user fa-2xl"></i>
                    </a>
                </li>
                
            </ul>
            
        </header>


            <?php 
            include("conn.php");
            $sql = "SELECT * FROM patient WHERE LoginID = $_SESSION[userID]";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result))
            {
            ?>

            <div id="Profile Card">
                <div class="pfbox">
                    <div class="userIcon">
                        
                    </div>

                    <div id="Userdetails">

                        <div class="rectUser" title="PatFullName">
                            <p>
                                <?php
                                
                                    print '<p>'.'<td>'.$row['PatFullName'].'</td>'.'</p>';

                                ?>
                            </p>
                        </div>

                        <div class="rectUser1" title="PatID">
                        
                            <?php
                            
                            print '<p>'.'UID : '.$row['PatID'].'</p>';

                            ?>
                        </div>

                        <div class="rectUser2" title="PatEmailAddress">
                            <?php

                            print '<p>'.$row['PatEmailAddress'].'</p>';

                            ?>
                        </div>

                        <div class="rectUserIC" title="PatIC">
                            <?php

                            print '<p>'.$row['PatIC'].'</p>';

                            ?>
                        </div>
                    </div>
                    <div class="edit" title="Edit Profile" onclick="openPopup1()">
            
                        <p>
                            Edit Profile
                        </p>
                        
                    </div>

                    <div class="logout" title="Log Out" onclick="openPopup()"> 

                        <p>
                            Log Out
                        </p>
                    
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

                            <div class="rectContent1">

                                <?php

                                print '<p>'.$row['PatGender'].'</p>';

                                ?>
                            </div>

                            <div class="rectContent2">
                                <?php

                                print '<p>'.$row['PatAge'].'</p>';

                                ?>
                            </div>

                            <div class="rectContent3">
                                <?php

                                print '<p>'.$row['PatPhoneNumber'].'</p>';

                                ?>
                            </div>

                            <div class="rectContent4">
                                <?php

                                print '<p>'.$row['PatAddress'].'</p>';

                                ?>
                            </div>

                            <div class="rectContent5">
                                <?php
                                print '<p>'.$row['PatPassword'].'</p>';
                                ?>
                            </div>

                            <div class="rectContent6a">
                                <?php

                                print '<p>'.$row['E_Contact_Name'].'</p>';

                                ?>
                            </div>

                            <div class="rectContent6b">
                                <?php

                                print '<p>'.$row['E_Relationship'].'<p>';

                                ?>
                            </div>

                            <div class="rectContent7">
                                <?php

                                print '<p>'.$row['E_Contact_No'].'<p>';

                                ?>
                            </div>

                </div>
            </div>
            
                    

            <div id="pop-up">
                <div class="edit-alert" id="Epopup">
                    <i class="fa-solid fa-xmark fa-xs" title="Cancel" onclick="closePopup1()"></i>
                    <p>
                        Do You Wish to Edit Your Profile?
                        <br>
                        *Your Changes Will Be Saved Automatically 
                        <br>
                        Once You Click ‘Save Profile’
                    </p>

                    <div class="yes" title="Yes">

                        <?php
                            print '<p><a href="EDIT%20USER%20PROFILE%20(EDIT).php?x='.$row['PatID'].'">Yes</a></p>';
                        ?>
                            
                    </div>

                    <?php
            }
            mysqli_close($con);
            ?>
                    <div class="no" title="No" onclick="closePopup1()">
                            <p>
                                No
                            </p>
                    </div>
                </div>

                <div class="lo-alert" id="loPopup">
                    <i class="fa-solid fa-xmark fa-xs" title="Cancel" onclick="closePopup()"></i>

                    <p>
                        Do You Wish to Log Out Your Account ?
                        <br>
                        *No Data Will Be Lost Once Log Out.
                    </p>

                    <a href="logout.php">
                        <div class="y" title="Log Out">
                            <p>
                                Yes, Log Me Out
                            </p>
                        </div>
                    </a>

                    <div class="n" title="Stay" onclick="closePopup()">
                        <p>
                            No, I’m Staying
                        </p>
                    </div>
                </div>
            </div>

        
        <script>
            let popup = document.getElementById("Epopup");

            function openPopup1() {
                popup.classList.add("open-popup");
            }

            function closePopup1() {
                popup.classList.remove("open-popup");
            }
        </script>

        <script>
            let popup1 = document.getElementById("loPopup");

            function openPopup() {
                popup1.classList.add("OPEN");
            }

            function closePopup() {
                popup1.classList.remove("OPEN");
            }
        </script>

        <script type="text/javascript">

            
        </script>