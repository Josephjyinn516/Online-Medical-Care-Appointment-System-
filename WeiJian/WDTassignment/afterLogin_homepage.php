<!DOCTYPE html>
<?php
session_start();

include("patientSession.php");

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Main Menu</title>
        <link href="afterLogin_homepage.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a534682a13.js" crossorigin="anonymous">

        </script>
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <!--Header of the page-->
    <body>
        <header>
            <!--Nav menu (icon)-->
            <ul id="icon">
                <a href="http://localhost/WDT%20Final%20Project/WeiJian/WDTassignment/afterLogin_homepage.php"><img src="img/Green House Care Real Estate Logo.png" title="Main Menu Homepage"></a>
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

        <!--title/page one section-->

        <div class="pageone">
            <h1>Introducing</h1>
            <h1>Elderly Home</h1>
            <p>The best Medical Care support you can find in Malaysia</p>
        </div>

        <!--page two/customer review section-->

        <div class="pagetwo">
            <h2>What People Say</h2>
                <div class="row">
                    <div class="reviews">
                        <span>&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;</span>
                            <blockquote><b>"The Doctor Is Good"</b></blockquote>
                            <p id="review-name">Mi You Qian<br>Patient of Elderly Home</p>
                    </div>

                    <div class="reviews">
                        <span>&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;</span>
                            <blockquote><b>"My Ah Ma Come Here And She<br>  Satisfied With The Service"</b></blockquote>
                            <p id="review-name">Yao Zhi Sha<br>Patient of Elderly Home</p>
                    </div>
                </div>
        </div>
        
        <!--footer section-->

        <footer>
            <br>

            <!--icon for footer-->
            <ul id="icon2">
                <img src="img/Green House Care Real Estate Logo.png">
            </ul>
            <br>
            <br>
            <br>

            <!--The copyright word-->
            <h3 id="copyright">©2022 ELDERLY HOME.  ALL RIGHTS RESERVED.</h3>
            <br>
            <br>
                <div class="mediaAndContact">

                    <!--The col1 style used to make all the column into center-->
                    <div class="col1" style="margin-left:25% ;">
                        <br>
                        <i class="fa fa-facebook-f" style="font-size: 26px;"></i>
                        <br>
                        <br>
                        <i class="fa fa-instagram" style="font-size: 26px;"></i>
                    </div>

                    <!--column2-->
                    <div class="col2" style="margin-top:0.2% ;">
                        <p class="FB">&nbsp; Elderly Home Club &nbsp;</p>
                        <p class="IG">&nbsp; elderlyhomeclub.malaysia &nbsp;</p>
                    </div>

                    <!--spacing between 2 columns-->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!--spacing between 2 columns-->

                    <!--column3-->
                    <div class="col3">
                        <br>
                        <i class="fa fa-envelope" style="font-size: 26px;"></i>
                        <br>
                        <br>
                        <i class="fa fa-phone" style="font-size: 26px;"></i>
                    </div>

                    <!--column4-->
                    <div class="col4">
                        <p class="message">&nbsp; elderlyhomeclubmalaysia@gmail.com &nbsp;</p>
                        <p class="phone">&nbsp; +60170987789 (24-HOUR CARELINE) &nbsp;</p>
                    </div>
                </div>
            <br>
        </footer>
    </body>


</html>