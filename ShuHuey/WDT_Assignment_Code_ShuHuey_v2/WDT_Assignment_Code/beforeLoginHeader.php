<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="beforeLogin_homepage.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body{
                background-image: url(img/doctor-shows-contact-icons-emergency-medical-care-doctor-shows-contact-icons-emergency-medical-care-network-168988426.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                margin: 0px;
                padding: 0px;
                font-family: 'DM Sans';
                font-style: normal;
                font-weight: 700;
                font-size: 16px;
                line-height: 24px;
            }

            /*header design*/

            header{
                background-color: #ececec;
                height: 90px;
            }

            a{
                color: #333333;
                text-decoration: none;
            }

            ul li.tab{
                list-style-type: none;
            }

            #icon{
                float: left;
            }

            img.logoimage{
                width: 150px;
                height: 70px;
                margin: -35%;
                margin-left: 2%;
                
            }
        </style>
    </head>

    <!--Header of the page-->
    <body>
        <header>
            <!--Nav menu (icon)-->
            <ul id="icon">
                <a href="http://localhost/WDT%20Final%20Project/WeiJian/WDTassignment/beforeLogin_homepage.html" class="header"><img class="logoimage" src="img/Green House Care Real Estate Logo.png" title="Main Menu Homepage"></a>
            </ul>

            <!--Nav menu(about us, doctor info, appointment, login and signup)-->

            <ul id="navigationMenu">
            <li><a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/ABOUT%20US%20(Bfr%20login).html" title="About us">About Us</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Doctor%20Info/B4DocDetails.html" title="Doctor Info">Doctor Info</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/ShuHuey/WDT_Assignment_Code_ShuHuey_v2/WDT_Assignment_Code/beforeLoginAppointmentForm.php" title="Appointment">Appointment</a></li>
                &nbsp;&nbsp;&nbsp;
                <a href="http://localhost/WDT%20Final%20Project/WeiJian/WDTassignment/signup.html" class="header"><input type="button" value="Sign up" title="Signup" class="signuplogin"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://localhost/WDT%20Final%20Project/WeiJian/WDTassignment/login.php" class="header"><input type="button" value="Login" title="Login" class="signuplogin"></a>
            </ul>
            
        </header>
    </body>


</html>