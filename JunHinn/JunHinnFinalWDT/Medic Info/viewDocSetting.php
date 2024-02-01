<?php 
session_start();
include 'doctorSession.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <title>
        Setting
    </title>

    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>

    <link rel="icon" href="Green House Care Real Estate Logo.png" type="image/png" sizes="16x16">

    <link href="viewSetting.css" rel="stylesheet">

    <script src="docSetting.js">

    </script>

    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

    <script src="https://kit.fontawesome.com/a534682a13.js" crossorigin="anonymous">

    </script>

</head>

<!--Header of the page-->

<body>
    <div id="User Profile">
        <div class="profile">

        </div>
    </div>


    <form action="editDocSetting1.php" method="post">

        <?php
        include("connMedic.php");
        $sql = "SELECT * FROM  doctor WHERE LoginID = $_SESSION[userID]";
        $result = mysqli_query($con, $sql);
        ?>

        <div id="Doctor Setting">
            <div class="background">
                <div class="basic-info-rect">
                    <p1>
                        <b>
                            Basic Info
                        </b>
                    </p1>

                    <?php
                    while ($row = mysqli_fetch_array($result)) {

                    ?>

                        <?php
                        echo '<p>' . $row['DoctorName'] . '</p>';
                        ?>

                        <div class="edit1" title="Edit Name">
                            <?php
                                print '<a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Medic%20Info/editDocSetting1.php?id='.$row['DoctorID'].'"><i class="fa-solid fa-pen-to-square"></i></a>';

                            ?>
                                
                            <!-- <a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Medic%20Info/editDocSetting.php" name="update" type="submit">
                            
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>                         -->
                        </div>

                        <div class="line">

                        </div>

                        <?php
                        echo '<p2>' . $row['DoctorIC'] . '</p2>';
                        ?>

                        <div class="edit2" title="Edit IC">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>

                        <div class="line1">

                        </div>

                        <?php
                        echo '<p3>' . $row['DoctorAge'] . '</p3>';
                        ?>

                        <div class="edit3" title="Edit Age">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>

                        <div class="line2">

                        </div>

                        <?php
                        echo '<p4>' . $row['Gender'] . '</p4>';
                        ?>

                        <div class="edit4" title="Edit Gender">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>
                </div>

                <div class="contact-info-rect">
                    <p1>
                        <b>
                            Contact Info
                        </b>
                    </p1>

                    <?php
                        echo '<p>' . $row['DoctorEmailAddress'] . '</p>';
                    ?>

                    <div class="line">

                    </div>

                    <div class="edit1" title="Edit Email">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>

                    <?php
                        echo '<p2>' . $row['Telephone'] . '</p2>';
                    ?>

                    <div class="edit2" title="Edit No.Tel">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                </div>

                <div class="doctor-info-rect">
                    <p1>
                        <b>
                            Doctor Info
                        </b>
                    </p1>

                    <?php
                        echo '<p>' . $row['DoctorID'] . '</p>';
                    ?>

                    <div class="line">

                    </div>

                    <?php
                        echo '<p2>' . $row['SpecialtyName'] . '</p2>';
                    ?>

                    <div class="edit2" title="Edit Specialist">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                </div>

                <div class="privacy-info-rect">
                    <p1>
                        <b>
                            Privacy Info
                        </b>
                    </p1>

                    <?php
                        echo '<p>' . $row['DoctorPassword'] . '</p>';
                    ?>

                    <div class="edit1" title="Edit Password">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </form>
</body>