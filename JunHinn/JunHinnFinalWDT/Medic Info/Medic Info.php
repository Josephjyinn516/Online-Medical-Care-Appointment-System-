<?php
session_start();
include 'doctorSession.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Doctor Schedule
    </title>

    <link href="Medic Info.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>

    <link rel="icon" href="Green House Care Real Estate Logo.png" type="image/png" sizes="16x16">

    <div id="Medic Info">
        <div class="background">

        </div>
    </div>

</head>

<!--Header of the page-->

<body>
    <header>
        <!--Nav menu-->
        <ul id="icon">
            <a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Medic%20Info/Medic%20Info.php"><img src="Green House Care Real Estate Logo.png" title="Main Menu Homepage"></a>
        </ul>

        <script src="https://kit.fontawesome.com/a534682a13.js" crossorigin="anonymous">

        </script>

        <div class="bell">
            <i class="fa-solid fa-bell fa-xl" title="Notification" onclick="openPopup()">

            </i>
        </div>

        <div class="cld">
            <i class="fa-regular fa-calendar fa-xl" title="Calendar"></i>

        </div>
    </header>



    <form method="post">

        <?php
        include("connMedic.php");
        $sql = "SELECT * FROM  doctor WHERE LoginID = $_SESSION[userID]";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $sql1 = "SELECT * FROM doctorreceiveappointment WHERE DoctorID = " . $row['DoctorID'];
            $result1 = mysqli_query($con, $sql1);
            while ($row = mysqli_fetch_array($result1)) {
                $sql2 = "SELECT * FROM patientmakeappointmentdetails WHERE AppointmentID = " . $row['AppointmentID'];
                $result2 = mysqli_query($con, $sql2);
                while ($row = mysqli_fetch_array($result2)) {
                    

                ?>

        <div id="Today' Appointment Card">
            <ta>
            Today' Appointments
            </ta>

            <div class="tCard">
                <tDay id="today">
                    <script>
                        const today = new Date();
                        document.getElementById("today").innerHTML = today.getDate();
                    </script>
                </tDay>

                <tm id="tMonth">
                    <script>
                        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

                        const m = new Date();
                        let month = months[m.getMonth()];
                        document.getElementById("tMonth").innerHTML = month;
                    </script>
                </tm>

                <ty id="tYear">
                    <script>
                        const y = new Date();
                        document.getElementById("tYear").innerHTML = y.getFullYear();
                    </script>
                </ty>
                
                <div class="line">

                </div>

                <div class="acceptedApp">
                <?php
                     echo '<p>' . $row['TimeChoice'] . '</p>';
                     echo '<ul>' .$row['MedicalConcern']. '</ul>';
                     echo '<ul>' .$row['PreferredSpecialty']. '</ul>';
                    }
                }
                ?>
                </div>
            </div>
            <?php
                }
            mysqli_close($con);
        ?>


        </div>

        <div id="Upcoming Appointment Card">
            <ua>
                Upcoming Appointment
            </ua>

            <div class="upCard">
                <tDay id="tmr">
                    <script>
                        const current = new Date();
                        const tomorrow = new Date(current);
                        tomorrow.setDate(tomorrow.getDate() + 1);
                        document.getElementById("tmr").innerHTML = tomorrow.getDate();
                    </script>
                </tDay>

                <tm id="nxtMonth">
                    <script>
                        let nxtMonth = months[m.getMonth()];
                        document.getElementById("nxtMonth").innerHTML = nxtMonth
                    </script>
                </tm>

                <ty id="nxtYear">
                    <script>
                        document.getElementById("nxtYear").innerHTML = y.getFullYear();
                    </script>
                </ty>

                <div class="line">

                </div>

                <div class="acceptedApp">
                
            
                </div>
            </div>
        </div>

        <div id="userProfile">
            <div class="userBack">

            </div>

            <div class="userIcon">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="cd" onclick="toggleMenu()">
                <i class="fa-solid fa-chevron-down"></i>
            </div>

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <div class="uI" title="Username">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <h3 title="Doctor Name">
                            My Profile
                        </h3>
                    </div>

                    <a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Medic%20Info/viewDocSetting.php" class="sub-menu-link">
                        <div class="sP" title="Setting Privacy">
                            <i class="fa-solid fa-gear"></i>
                        </div>

                        <p title="Setting & Privacy">
                            Setting & Privacy
                        </p>
                    </a>

                    <a href="logout.php" class="sub-menu-link">
                        <div class="lO" title="Log out">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </div>

                        <p title="Log Out">
                            Logout
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <div id="popUp">
            <!-- <div class="box" id="Popup">
                <h1>
                    Accept & Decline Appointment
                </h1>

                <div class="esc">
                    <button type="button" class="btn2" onclick="closePopup()">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>

                <div class="appBox">
                    <div class="accept" title="Accept">
                        <button type="button" class="acceptBtn">
                            Accept
                        </button>

                        <div class="decline" title="Decline">
                            <button type="button" class="declineBtn">
                                Decline
                            </button>
                        </div>
                    </div>
                </div> -->

                <script>
                    let popup = document.getElementById("Popup");

                    function openPopup() {
                        popup.classList.add("open-popup");
                    }

                    function closePopup() {
                        popup.classList.remove("open-popup");
                    }
                </script>

                <script>
                    let subMenu = document.getElementById("subMenu");

                    function toggleMenu() {
                        subMenu.classList.toggle("open-menu");
                    }
                </script>
            </div>
    </form>



</body>