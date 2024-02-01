<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE-edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Edit Profile
        </title>

        <link href="EDIT USER PROFILE.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>

        <link rel="icon" href="Green_House_Care_Real_Estate_Logo.png" type = "image/png" sizes="16x16">

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
                <a href="http://localhost/WDT%20Final%20Project/WeiJian/WDTassignment/afterLogin_homepage.php"><img src="img/Green_House_Care_Real_Estate_Logo.png" title="Main Menu Homepage"></a>
            </ul>

            <!--Nav menu(about us, doctor info, appointment, user profile)-->

            <ul id="navigationMenu">
                <li><a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/ABOUT%20US%20(Aftr%20login).html" title="About us">About Us</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Search%20Doctor%20Page/new_view.php?search_keyword=kong" title="Doctor Info">Doctor Info</a></li>
                <li><a href="http://localhost/WDT%20Final%20Project/ShuHuey/WDT_Assignment_Code_ShuHuey_v2/WDT_Assignment_Code/afterLoginAppointmentForm.php" title="Appointment">Appointment</a></li>
                <li>
                    <a href="http://localhost/WDT%20Final%20Project/Marcus/WDT_Grp_Assignment_Lee_Wen_Juin_Code/EDIT%20USER%20PROFILE%20(DEFAULT).php" title="Username">
                        <i class="fa-solid fa-user fa-2xl"></i>
                    </a>
                </li>
                
            </ul>
            
        </header>

        <form action="UP_insert.php" method="post">

        <?php
        include ("conn.php");
        $sql = "SELECT * FROM userprofile";
        $result = mysqli_query($con, $sql);
        ?>

        <div id="Profile Card">
            <div class="pfbox">
                <div class="userIcon">
                    <a href="#">
                        <p>
                            Change
                            Profile
                            Image
                        </p>
                    </a>

                </div>

                <div id="Userdetails">
                    <div class="rectUser" title="Edit Guest Name">
                        <a href="#">

                            <input title="Edit Guest Name" type="text" required="required" maxlength="255" name="nm" placeholder="Name"/>
                            <i class="fa-solid fa-pen-to-square fa-lg"></i>
                        
                        </a>
                    </div>

                    <div class="rectUser1" title="PatID">
                        <p>
                            Patient ID
                        </p>
                    </div>

                    <div class="rectUser2" title="Edit Guest Email">
                        <a href="#">
                        <input title="Edit User Email" type="text" required="required" maxlength="255" name="email" placeholder="Email"/>
                        <i class="fa-solid fa-pen-to-square fa-lg"></i>
                        </a>
                    </div>

                    <div class="rectUserIC" title="PatIC">
                        <input title='PatIC' type="text" required="required" maxlength="50" name="IC" placeholder="Patient IC"/>
                        <i class="fa-solid fa-pen-to-square fa-lg"></i>
                    </div>
                        
                    <a href="http://localhost/testpage/WDT%20Group%20Assignment/EDIT%20SAVE.php">
                        <div class="save" title="Save Profile" name="savebtn">
                            <p>
                                Save Profile
                            </p>
                        </div>
                    </a>

                    <a href="http://localhost/testpage/WDT%20Group%20Assignment/USER%20PROFILE.php">
                        <div class="cancel" title="Cancel">
                            <p>
                                Cancel Edit
                            </p>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>

        <div id="userDetails">
            <div class="detailsBox">
                <div class="rectDB1">
                    <p>
                        Gender
                    </p>
                </div>

                <div class="rectDB2">
                    <p>
                        Age
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

                <!-- Input for Gender Options -->
                    <select class= "rectContent1" name="Gender" required="required">
                    <option class= "rectContent1" value="">Please select</option>
                    <option class= "rectContent1" value="Male">Male</option>
                    <option class= "rectContent1" value="Female">Female</option>

                <!-- Input for Age  -->
                <input class="rectContent2" type="text" name="age" maxlength="3" placeholder="Patient Age"></input>

                <!-- Input for Telephone No. -->
                <div class="rectContent3">
                    <input type="tel" name="Tel_No" required="required" placeholder="+000-0000000" maxlength="12"></input>
                    <i class="fa-solid fa-pen-to-square fa-lg"></i>
                </div>

                <!-- Input for Address -->
                <div class="rectContent4">
                    <input type="address" name="address" required="required" placeholder="Address"></input>
                    <i class="fa-solid fa-pen-to-square fa-lg"></i>
                </div>

                <!-- Input for Password -->
                <div class="rectContent5">
                    <input type="password" name="password" id="password" required="required" placeholder="Password"></input>
                    <i class="fa-solid fa-eye fa-lg" title="Visible" onclick="myFunction()"></i>
                    <div class="rectCP">
                        <p title="Change Password">
                            Change Password
                        </p>
                    </div>
                </div>

                <!-- Input for Emergency Contact Name -->
                <div class="rectContent6a">
                    <input type="text" name="e_contact_name" required="required" placeholder="Emergency Contact Name"></input>
                    <i class="fa-solid fa-pen-to-square fa-lg" title="Emergency Contact Name"></i>

                </div>

                <!-- Input for Relationship -->

                <select class="rectContent6b" name="Relationship" required="required">
                <option class="rectContent6b" value="">Please select</option>
                <option class="rectContent6b" value="Husband">Husband</option>
                <option class="rectContent6b" value="Wife">Wife</option>
                <option class="rectContent6b" value="Son">Son</option>
                <option class="rectContent6b" value="Daughter">Daughter</option>
                <option class="rectContent6b" value="Grandchild">Grandchild</option>
                <option class="rectContent6b" value="Guardian">Guardian</option>

                <!-- Input for Emergency Contact No. -->

                <input type="tel" name="EmergencyContact" required="required" placeholder="+000-0000000" maxlength="12"></input>
                <i class="fa-solid fa-pen-to-square fa-lg" title="Emergency Contact Tel"></i>

            </div>  
        </div>
    </div>
</form>

<script type="text/javascript">

    function myFunction() 
    {
        var x = document.getElementById("password");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
    }
</script>