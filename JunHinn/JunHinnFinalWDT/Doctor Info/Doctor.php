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
            Doctor Info
        </title>

        <link rel="icon" href="Green House Care Real Estate Logo.png" type="image/png" sizes="16x16">

        <link href="doctor.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li>
                    <a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/USER%20PROFILE.php" title="Username">
                        <i class="fa-solid fa-user fa-2xl"></i>
                    </a>
                </li>
                
            </ul>
            
            <script src="https://kit.fontawesome.com/a534682a13.js" crossorigin="anonymous">

            </script>
        </header>

        <div id="Find Doctor">
            <div class="background">

            </div>

            <div id="Title">
                <h1>
                    Doctor Info
                </h1>
            </div>
        </div>
        
        <div id="Doctor-box">
            <div class="square">
                <img src="elizabeth.jpeg">
                <div class="docDetails">
                    <p>
                        Name: Dr. Elizabeth
                        <br><br>
                        Specialists: Cardiology 
                    </p>
                </div>

                <a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/View%20Doctor%20Schedule/elizabethDetails.php">
                    <div class="btn">
                        <p>
                            View Details
                        </p>
                    </div> 
                </a>
            </div>
            
            

            <div class="square1">
                <img src="chen.jpeg">
                <div class="docDetails1">
                    <p>
                        Name: Dr. Chen Ming Hou
                        <br><br>
                        Specialists: Dermatology
                    </p>
                </div>
            
                <a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/View%20Doctor%20Schedule/chenDetails.php">
                    <div class="btn">
                         <p>
                             View Details
                         </p>
                     </div> 
                 </a>
            </div>

            <div class="square2">
                <img src="leonard.jpg">
                <div class="docDetails2">
                    <p>
                        Name: Dr Leonard Smith
                        <br><br>
                        Specialists: Physiotherapy
                    </p>
                </div>
            
                <a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/View%20Doctor%20Schedule/leonardDetails.php">
                    <div class="btn">
                         <p>
                             View Details
                         </p>
                     </div> 
                 </a>
            </div>
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
</html>