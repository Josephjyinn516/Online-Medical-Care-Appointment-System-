<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE-edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Doctor Schedule
        </title>

        <link href="docDetails1.css" rel="stylesheet">

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
                <a href="docDetails.html"><img src="Green House Care Real Estate Logo.png" title="Main Menu Homepage"></a>
            </ul>

            <!--Nav menu(about us, doctor info, appointment, user profile)-->

            <ul id="navigationMenu">
                <li><a href="#" title="About us">About Us</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Search%20Doctor%20Page/Doctor.html" title="Doctor Info">Doctor Info</a></li>
                <li><a href="#" title="Appointment">Appointment</a></li>
                <li>
                    <a href="http://localhost/WDT%20Final%20Project/Marcus/UP1.html" title="Username">
                        <i class="fa-solid fa-user fa-2xl"></i>
                    </a>
                </li>
            </ul>
        </header>

        <form action="new_view" method="POST">

            <?php 
                include("connMakeApp.php");
                $sql = "SELECT * FROM  patientmakeappointmentdetails";
                $result = mysqli_query($con, $sql);
            ?>

            <div id="Doctor Schedule">
                <div class="background">

                </div>

                <div id="Square">
                    <div class="docPf">

                    </div>                

                    <div class="docDetails">
                        <?php
                            while ($row = mysqli_fetch_array($result)) 
                            {
                                
                                ?>

                            <?php 
                                echo '<p>', 'Name: '.$row['DoctorName'].'</p>';
                            ?>

                            <br><br><br>
                                
                            <?php
                                echo '<p>', 'Specialty: '.$row['PreferredSpecialty'].'</p>';
                            ?>

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
                        <div class="weatherBox">
                            <day id="liveDay">
                                <script>
                                    const d =new Date();
                                    document.getElementById("liveDay").innerHTML = d.getDate();
                                </script>
                            </day>

                            <month id="liveMonth">
                                <script>
                                    const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                                    
                                    const m = new Date();
                                    let month = months[m.getMonth()];
                                    document.getElementById("liveMonth").innerHTML = month;
                                </script>
                            </month>

                            <year id="liveYear"> 
                                <script>
                                    const y = new Date();
                                    document.getElementById("liveYear").innerHTML = y.getFullYear();
                                </script>
                            </year>
                        </div>

                        <div class="timeBox1">
                            <?php
                                echo '<p>'.$row['TimeChoice'].'</p>';
                            ?>
                        </div>

                        <div class="timeBox2">

                        </div>

                        <div class="timeBox3">

                        </div>

                    </div>


                </div>
                <?php
                }
                ?>
                    

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
        </form>


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