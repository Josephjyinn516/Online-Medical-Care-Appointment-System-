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
            Chen Details
        </title>

        <link href="docDetails.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>

        <link rel="icon" href="Green House Care Real Estate Logo.png" type="image/png" sizes="16x16">

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
            <li><a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/ABOUT%20US%20(Aftr%20login).php" title="About us">About Us</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Doctor%20Info/Doctor.php" title="Doctor Info">Doctor Info</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/ShuHuey/WDT_Assignment_Code_ShuHuey_v2/WDT_Assignment_Code/afterLoginAppointmentForm.php" title="Appointment">Appointment</a></li>
                    <a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/USER%20PROFILE.php" title="Username">
                        <i class="fa-solid fa-user fa-2xl"></i>
                    </a>
                </li>
                
            </ul>
        </header>

        
            <div id="Doctor Schedule">
                <div class="background">

                </div>

                <div id="Square">
                    <div class="docPf">
                        <img src="chen.jpeg">
                    </div>                

                    <div class="docDetails">
                        <p>
                            Name: Chen Ming Hou
                        </p>

                        <br><br><br>

                        <p>
                            Specialty: Dermatology
                        </p>
                
                        <div class="ig">
                            <i class="fa-brands fa-instagram fa-2xl" title="Instagram">

                            </i>
                        </div>

                        <div class="fb">
                            <i class="fa-brands fa-facebook-f fa-2xl" title="Facebook">

                            </i>
                        </div>
                        
                        <div class="mail">
                            <i class="fa-sharp fa-solid fa-envelope fa-2xl" title="Email">

                            </i>
                        </div>
                        
                    </div>



                    <div class="calendarCard">
                        <h3>
                            Doctor Details
                        </h3>

                        <br><br>

                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </div>


                </div>
                    

                <a href="http://localhost/WDT%20Final%20Project/ShuHuey/WDT_Assignment_Code_ShuHuey_v2/WDT_Assignment_Code/afterLoginAppointmentForm.php">
                    <div class="appointmentBtn">
                        <apm>
                            <b>
                                Make Appointment  
                            </b>
                        </apm>
                    </div>
                </a>
            </div>



        <footer>
            <ec>
                Emergency Contact
            </ec>

            <cn>
                Contact Number
            </cn>

            <desc>
                If you have any concern or wanted to see us ASAP, please do contact our emergency doctor for an immediate support without sign up
            </desc>


            <div class="rect1">
                <span>
                    Dr Ismail +60164587235
                </span>  
                
                <div class="phone1">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="msg1">
                    <i class="fa-solid fa-message"></i>
                </div>

                <div class="mail1">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>

            <div class="rect2">
                <span>
                    Dr Tan +60124568213
                </span>

                <div class="phone2">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="msg2">
                    <i class="fa-solid fa-message"></i>
                </div>

                <div class="mail2">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>

            <div class="rect3">
                <span>
                    Dr Chong +60197744658
                </span>

                <div class="phone3">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="msg3">
                    <i class="fa-solid fa-message"></i>
                </div>

                <div class="mail3">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>
        </footer>
    </body>