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

    <link href="editSetting.css" rel="stylesheet">


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


        <?php
        include("connMedic.php");
        $id = intval($_GET['id']);
        $result = mysqli_query($con, "SELECT * FROM doctor WHERE DoctorID=$id");
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <form action="updateDocSetting.php" method="post">
                <input type="hidden" name="DoctorID" value="<?php echo $row['DoctorID'] ?>">

                <div id="Doctor Setting">
                    <div class="background">
                        <div class="basic-info-rect">
                            <p1>
                                <b>
                                    Basic Info
                                </b>
                            </p1>

                            <div class="name">
                                <input type="text" name="name" required="required" placeholder="Enter Your Name" value="<?php echo $row['DoctorName'] ?>"/>
                            </div>
                            
                            <div class="edit1">
                                <input type="submit" name="btn" value="Submit"/>
                            </div>

                                <!-- <div class="edit1" title="Edit Name">
                                    <button type="submit" name="btn">Submit</button>
                                        
                                </div> -->

                                <div class="line">

                                </div>

                                <div class="gender">
                                <select name="gender" required="required">
                                    <option value="">Select Gender</option>

                                    <option value="Male" 
                                    <?php 
                                        if ($row['Gender'] == "Male") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Male</option>



                                    <option value="Female" 
                                    <?php 
                                        if ($row['Gender'] == "Female") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Female</option>
                                    </select>
                                </div>

                                <div class="ic">
                                <input type="text" name="ic" required="required" value="<?php echo $row['DoctorIC'] ?>"/>
                                </div>

                                <div class="edit4" title="Edit Age">
                                    <input type="submit" name="btn" value="Submit"/>
                                </div>

                                <div class="line1">

                                </div>

                                <div class="age">
                                <input type="text" name="age" required="required" value="<?php echo $row['DoctorAge'] ?>"/>
                                </div>

                                <div class="edit3" title="Edit IC">
                                    <input type="submit" name="btn" value="Submit"/>
                                </div>

                                <div class="line2">

                                </div>
                        </div>

                        <div class="contact-info-rect">
                            <p1>
                                <b>
                                    Contact Info
                                </b>
                            </p1>

                            <div class="email">
                                <input type="email" name="mail" required="required" value="<?php echo $row['DoctorEmailAddress'] ?>"/>
                            </div>

                            <div class="line">

                            </div>

                            <div class="edit1" title="Edit Email">
                            <input type="submit" name="btn" value="Submit"/>
                            </div>

                            <div class="tel">
                                <input type="text" name="telephone" required="required" value="<?php echo $row['Telephone'] ?>"/>
                            </div>

                            <div class="edit2" title="Edit No.Tel">
                            <input type="submit" name="btn" value="Submit"/>
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

 
                                <div class="spec">
                                <select name="spec" required="required">
                                    <option value="">Please select</option>

                                    <option value="Allergists" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Allergists") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Allergists</option>



                                    <option value="Anesthesiology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Anesthesiology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Anesthesiology</option>



                                    <option value="Cardiology"
                                    <?php 
                                        if ($row['SpecialtyName'] == "Cardiology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Cardiology</option>



                                    <option value="Dermatology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Dermatology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Dermatology</option>



                                    <option value="Endocrinology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Endocrinology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Endocrinology</option>

                                        
                                    <option value="Gastroenterology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Gastroenterology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Gastroenterology</option>



                                    <option value="Hematology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Hematology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Hematology</option>



                                    <option value="Infectious Disease Specialists" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Infectious Disease Specialists") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Infectious Disease Specialists</option>



                                    <option value="Nephrology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Nephrology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Nephrology</option>



                                    <option value="Neurology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Neurology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Neurology</option>



                                    <option value="Oncology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Oncology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Oncology</option>



                                    <option value="Ophthalmology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Ophthalmology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Ophthalmology</option>



                                    <option value="Physiotherapy" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Physiotherapy") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Physiotherapy</option>



                                    <option value="Podiatrists" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Podiatrists") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Podiatrists</option>



                                    <option value="Psychiatrists" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Psychiatrists") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Psychiatrists</option>



                                    <option value="Pulmonology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Pulmonology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Pulmonology</option>



                                    <option value="Radiology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Radiologists") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Radiology</option>



                                    <option value="Rheumatology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Rheumatology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Rheumatology</option>



                                    <option value="Urology" 
                                    <?php 
                                        if ($row['SpecialtyName'] == "Urology") 
                                        { 
                                    ?>
                                        selected
                                    <?php 
                                        } 
                                    ?>
                                    >Urologists</option>

                                    </select>
                        </div>

                        <div class="privacy-info-rect">
                            <p1>
                                <b>
                                    Privacy Info
                                </b>
                            </p1>

                            <div class="pass">
                                <input type="text" name="pass" required="required" value="<?php echo $row['DoctorPassword'] ?>"/>
                            </div>

                            <div class="edit1" title="Edit Password">
                                <input type="submit" name="btn" value="Submit"/>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </form>
</body>