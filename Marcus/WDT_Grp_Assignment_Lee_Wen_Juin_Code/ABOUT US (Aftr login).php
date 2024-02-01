<?php
include("patientSession.php");

?>


<!DOCTYPE html>





<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Us</title>
        <link href="afterLogin_homepage.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link href="About Us.css" rel='stylesheet'>
        <link href="footer.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a534682a13.js" crossorigin="anonymous">

        </script>

    </head>

    <style>
    </style>

    <!--Header of the page-->
    <body>
        <header>
            <!--Nav menu (icon)-->
            <ul id="icon">
                <a href="http://localhost/WDT%20Final%20Project/WeiJian/WDTassignment/afterLogin_homepage.php"><img src="Green_House_Care_Real_Estate_Logo.png" title="Main Menu Homepage"></a>
            </ul>

            <!--Nav menu(about us, doctor info, appointment, login and signup)-->

            <ul id="navigationMenu">
            <li><a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/ABOUT%20US%20(Aftr%20login).php" title="About us">About Us</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Doctor%20Info/Doctor.php" title="Doctor Info">Doctor Info</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/ShuHuey/WDT_Assignment_Code_ShuHuey_v2/WDT_Assignment_Code/afterLoginAppointmentForm.php" title="Appointment">Appointment</a></li>
                &nbsp;&nbsp;&nbsp;
                <li>
                    <a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/USER%20PROFILE.php" title="Username">
                        <i class="fa-solid fa-user fa-2xl"></i>
                    </a>
                </li>
            </ul>
            
        </header>

        <div class="AboutUspageone">
            <div id="AboutUsHead">
                <h1 class="AboutUsText1">About Us</h1>
                <h1 class="AboutUsText2">A brief information about us, Elderly Home.<br>Our Service, Our Moto.</h1>
            </div>
            <div id="picturecontainer">
                <img class="page1picture" src="helping-hand.jpeg" title="helping-hand">
                <img class="page1picture" src="heart.jpeg" title="heart">
                <img class="page1picture" src="zoom.jpeg" title="zoom">
                <h2 class="page1pictureText">Strived to Help.</h2>
                <h2 class="page1pictureText">Your Health is Our Concern.</h2>
                <h2 class="page1pictureText">Always Looking to be the<br>Best For Our Patients.</h2>
            </div>
            
        </div>

        <div class="AboutUspagetwo">
            <img class="oldfolksimg" src="istockphoto-470569531-612x612.jpg" title="old folks">
            <h1 class="page2pictureText1">Why Elderly Home?</h1>
            <h2 class="page2pictureText2">We often found elders or senior citizens
                who are lacking of a nice, cozy, and comfortable place
                to stay the night
                because of the reason being abandoned by their own kin.
                Therefore, with this facility being established at 1st November 2022, we strived to help those
                senior citizens who are in desperate need.
                Our founder, [ ], once said, 
                "There will be no senior citizens being left out as long we are there by their side."</h2>
        </div>
        
        <div class="AboutUspagethree">
            <img class="page3doctorpicture" src="doctor-symbol-png-favpng-nnPkCYtDQXJmbGvZ9gFGCXVyL-removebg-preview.png" title="Male Doctor"><br>
            <img class="page3doctorpicture" src="doctor-website-profilefemale-01.jpg" title="Female Doctor">
            <h1 class="page3pictureText1">About Our Medics</h1>
            <h2 class="page3pictureText2">Our medics are always on stand-by and always ready to help our beloved senior citizen friends. 
                With the best of our medics, we ensure professional and convincing services from our medics.</h2>
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