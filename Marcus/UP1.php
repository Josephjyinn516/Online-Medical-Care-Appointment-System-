<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        User Profile
    </title>

    <link href="UP1.css" rel="stylesheet">

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
            <a href="UP1.html"><img src="Green House Care Real Estate Logo.png" title="Main Menu Homepage"></a>
        </ul>

        <!--Nav menu(about us, doctor info, appointment, user profile)-->

        <ul id="navigationMenu">
            <li><a href="#" title="About us">About Us</a></li>
            <li><a href="#" title="Doctor Info">Doctor Info</a></li>
            <li><a href="#" title="Appointment">Appointment</a></li>
            <li>
                <a href="#" title="Username">
                    <i class="fa-solid fa-user fa-2xl"></i>
                </a>
            </li>
        </ul>
    </header>



    <div id="Profile Card">
        <div class="pfbox">
            <div class="userIcon">

            </div>


            <div id="Userdetails">
                <div class="rectUser" title="Guest Name">

                </div>

                <div class="rectUser1" title="Patient ID">
                    <p>
                        Patient ID
                    </p>
                </div>

                <div class="rectUser2" title="Guest Email">
                    <p>
                        Guest123@gmail.com
                    </p>
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
    </div>

    <?php
    include("connPat.php");
    $sql = "SELECT * FROM  PatFullName";
    $result = mysqli_query($con, $sql);
    ?>

    <div id="userDetails">
        <div class="detailsBox">
            <div class="rectDB1">
                <p>
                    Gender
                </p>
            </div>

            <div class="rectDB2">
                <p>
                    Birthday
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
                <p>
                    Male/Female
                </p>
            </div>

            <div class="rectContent2">
                <p>
                    Day/Month/Year
                </p>
            </div>

            <div class="rectContent3">
                <p>
                    +0000-000 0000
                </p>
            </div>

            <div class="rectContent4">
                <p>
                    123, American Street, 70000. USA
                </p>
            </div>

            <div class="rectContent5">
                <p>
                    **********
                </p>
            </div>

            <div class="rectContent6a">
                <p>
                    Name
                </p>
            </div>

            <div class="rectContent6b">
                <p>
                    Husband/Wife/Son/Daughter/Grandchild/Guardian
                </p>
            </div>

            <div class="rectContent7">
                <p>
                    +0000-000 0000
                </p>
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

            <a href="http://localhost/WDT%20Final%20Project/Marcus/EditProfile.html#">
                <div class="yes" title="Yes">

                    <p>
                        Yes
                    </p>

                </div>
            </a>


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

            <a href="http://localhost/WDT%20Final%20Project/WeiJian/WDTassignment/login.php">
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