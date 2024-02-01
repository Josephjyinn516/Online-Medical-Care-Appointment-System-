<?php include 'patientSession.php';?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Manage Appointment</title>
        <link href="ManageAppt.css" rel="stylesheet">


        <!-- header and footer style -->
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link href="beforeLogin_homepage.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>
        <?php include 'backToTopButton.php';?>

        <!--Header of the page-->
        <?php include 'afterLoginHeader.php';?>

        <!-- content -->
        <script>
        function displayDiv(){
        var divSelected = document.getElementById("textInDiv");
            if (divSelected.style.display == "block") {
                divSelected.style.display = "none";
            }
            else {
                divSelected.style.display = "block";
            }
        }
        </script>


        <ul class="centerUpperBox">
            <a href="afterLoginAppointmentForm.php"><input type="button" value="Make An Appointment" title="Make An Appointment" id="makeAnApp"></a>
            <a href="ManageAppointment.php"><input type="button" value="Manage My Appointment(s)" title="Manage My Appointment(s)" id="manageApp"></a>
        </ul>

        
        <div class="tableContainer">
        <table id="bigTable">

            <tr>
                <th>
                    <div class="transparentContainer">
                    <span class="tableTitle">My Appointment Schedule</span>
                    <button type="button" id="clickOnInfoImage" class="onImageClick" onclick="displayDiv()" style="cursor: pointer;">
                    &nbsp;&nbsp;
                    <img src="img/info.png" title="Click Me for More Info!" alt="Click Me for More Info!" id="infoImage">
                    <span style="color: rgb(144, 144, 144); font-size: 15px; margin-left: 1px;">
                        Click Me For More Info!
                    </span>
                
                    </button>



                    <div class="infoText2" id="textInDiv" style="display:none">
                        <div class="blueContainer">
                            <div style="margin-bottom: 10px;">
                            Check the <u>details of your appointment</u> in this section.
                            After submitting your appointment form, please allow <u>1 working day for confirmation on your appointment.</u><br>
                            </div>

                            <div style="margin-bottom: 10px;">
                            <span style="color: #01A9B2; font-style: oblique;">
                                Different Kind of Appointment Status<br>
                            </span>
                            - <span style="color: rgba(0, 181, 67, 0.58);">Successful</span> : Appointment is successfully made. Kindly come by the appointed hospital at the designated time!<br>
                            - <span style="color: red;">Fail</span> : Appointment request is not made due to some reasons<br>
                            - <span style="color: orange">Pending</span> : Waiting for confirmation of appointment by doctor
                            </div>

                            
                            <div>
                            <span style="color: grey;">'View Details'</span> : All appointment details will be shown<br>
                            <span style="color: grey;">'Cancel Appointment'</span> : If you cannot attend the appointment, cancelling the appointment may be a wise choice.
                            </div>
                        </div>
                    </div>

                    </div>

                </th>
            </tr>


            <tr>
                <td>
                    <div class="transparentContainer1">
                        
                        <?php
                        $searchkeyword = "";
                        if (isset($_GET["searchBtn"])) { 
                            $searchkeyword = $_GET['search_keyword'];
                        }
                        if (isset($_GET["resetBtn"])) { 
                            $searchkeyword = ""; 
                        }

                        $sortDate = "DESC";
                        if (isset($_GET["sortDateButton"])) { 
                            $sortDate = $_GET['sortDateKeyword'];
                        }
                        if (isset($_GET["resetSortDateBtn"])) { 
                            $sortDate = "DESC"; 
                        }
                        ?>

                        <form method="GET" action="ManageAppointment.php">
                        Search date : &nbsp <input type="date" 
                        name="search_keyword" title="Enter appointment date for searching"
                        style="border-color: #01A9B2; font-family: 'DM Sans';" >
                        
                        &nbsp 
                        <button type="submit" name="searchBtn" style="border-color: #01A9B2; font-family: 'DM Sans'; cursor: pointer;">Search</button>&nbsp
                        <button type="submit" name="resetBtn" style="border-color: #01A9B2; font-family: 'DM Sans'; cursor: pointer;">Return to Default</button>                        
                        &nbsp<span style="font-weight: lighter; "><i>(Enter appointment date to search for specific appointment)</i></span>

                    </div>
                </td>
            </tr>



            <tr>
                <td>
                    <div class="transparentContainer1">
                        Sort date : &nbsp 
                        
                        <select name="sortDateKeyword" style="border-color: #01A9B2; font-family: 'DM Sans'; cursor: pointer;" 
                        id="sortDateOption">
                            <option value="DESC">Sort Date from Newest to Oldest</option>
                            <option value="ASC">Sort Date from Oldest to Newest</option>
                        </select>
                        
                        &nbsp 
                        <button type="submit" name="sortDateButton" style="border-color: #01A9B2; font-family: 'DM Sans'; cursor: pointer;">Confirm Selection</button>&nbsp
                        <button type="submit" name="resetSortDateBtn" style="border-color: #01A9B2; font-family: 'DM Sans'; cursor: pointer;">Return to Default</button>


                        &nbsp<span style="font-weight: lighter; "><i>(Sort appointment date by "newest to oldest" or "oldest to newest")</i></span>
                        </form>


                    </div>
                </td>
            </tr>


            <tr>
                <td>
                    <div class="transparentContainer1">
                        <table id="bookmarkTable" style="margin-top: 7px;">
                            <tr>
                                <td style="width: 230px; border-right: 5px solid rgb(57, 206, 158); color: rgb(36, 134, 103);">
                                    Quick Direct to Content
                                </td>
                               
                                <td style="padding-left: 10px; width: 300px;">
                                    <a href="#SuccessfulAppointment">Go To Successful Appointment</a>
                                    <br>
                                    <a href="#PendingAppointment">Go To Pending Appointment</a>
                                    <br>
                                    <a href="#FailAppointment">Go To Fail Appointment</a>
                                </td>

                            </tr>
                        </table>
                    </div>
                </td>
            </tr>



            <tr>
                <td>
                    <div class="transparentContainer1">
                        <a name="SuccessfulAppointment"><span style="color: rgba(0, 181, 67, 0.58);">Successful Appointment</span></a>
                        
                        <!--Table for Successful Appointment-->
                        <table id="successfulTable">
                            <thead>
                            <tr class="FirstRow">
                                <th>No.</th>
                                <th class="centerText">Appointment Date<br>(yyyy/mm/dd)</th>
                                <th class="centerText">Appointment <br>Time</th>
                                <th class="centerText">Selected Hospital</th>
                                <th class="centerText">Patient's Name</th>
                                <th class="centerText">Request Status</th>
                                <th class="centerText">View <br>Details</th>
                                <th class="centerText">Cancel <br>Appointment</th>
                            </tr>
                            </thead>

                            <tbody>
                            
                            <tr style="height: 0.75em; ">
                                <td>
                                </td>
                            </tr>
                            

                            <!-- Dynamic row -->
                            <?php
                            include("connectToDatabase.php");
                            $sql = "SELECT * FROM patientmakeappointmentdetails WHERE PatID=(
                                    SELECT PatID FROM patient WHERE LoginID='".$_SESSION["userID"]."') 
                                    AND ApptStatus='Successful' AND DateChoice LIKE '%".$searchkeyword."%'".
                                    "ORDER BY patientmakeappointmentdetails.DateChoice ".$sortDate;
                            $resultSuc = mysqli_query($con,$sql);
                            $numberCounter = 0;

                            if (mysqli_num_rows($resultSuc) == 0){
                                echo "<tr><td colspan='8'>";
                                echo "<div style='text-align: center; margin-top: 0.5em; margin-bottom: 0.5em;'>";
                                echo "<img src='img/emptyBox.png' alt='Empty Appointment' width='80px'><br>";
                                echo "There are no more upcoming appointments.<br>";
                                echo "Want to make an appointment? Go to ";
                                echo "<a href='afterLoginAppointmentForm.php' style='color: blue;'>Make An Appointment</a>";
                                echo "</div></td></tr>";
                            }
                            
                                while ($row = mysqli_fetch_array($resultSuc)) {

                                    echo '<tr>';
                                    echo '<td class="numberCounter">';
                                    $numberCounter = $numberCounter + 1;
                                    echo $numberCounter;
                                    echo '</td>';

                                    echo '<td class="centerText">';
                                    echo $row['DateChoice'];
                                    echo '</td>';

                                    echo '<td class="centerText">';
                                    echo $row['TimeChoice'];
                                    echo '</td>';

                                    echo '<td class="centerText">';
                                    echo $row['Hospital'];
                                    echo '</td>';




                                    include("connectToDatabase.php");
                                    $sql2 = "SELECT * FROM patient WHERE LoginID='" . $_SESSION["userID"] . "'";
                                    $result2 = mysqli_query($con, $sql2);
                                    while ($row2 = mysqli_fetch_array($result2)) {
                                        echo '<td class="centerText">';
                                        echo $row2['PatFullName'];
                                        // echo "Patient's Name";
                                        echo '</td>';
                                    }


                                    echo '<td class="centerText" style="color:rgba(0, 181, 67, 0.58)">';
                                    echo $row['ApptStatus'];
                                    echo '</td>';


                                    echo '<td class="viewDetails">';

                                    echo '<form method="post" target="_self" action="viewAppointmentDetails.php">';
                                    echo '<input type="hidden" name="AppointmentID" value="' . $row['AppointmentID'] . '">';
                                   
                                    echo '<button style="all:unset;cursor:pointer;" type="submit" name="submitBtn">';
                                    echo '<img src="img/viewDetails.png" id="imageViewDetails"
                                            title="View Details" alt="Click Me for More Appointment Details!"><br>';
                                    echo "VIEW";
                                    echo '</button>';
                                    echo "</form>";
                                    echo '</td>';




                                    echo '<td class="cancelAppt">';
                                    echo '<a href="delete.php?ID=' . $row['AppointmentID'] .
                                        '" onclick="return confirm(\'Do you confirm to delete ' . $row['DateChoice'] .
                                        ' ' . $row['TimeChoice'] . ' appointment?\');">CANCEL</a>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                mysqli_close($con);
                            ?>
                            </tbody>
                        </table>

                    </div>
                </td>
            </tr>
            


            <tr> <!-- Break Between Two Tables -->
                <td><div style="height: 1em;"></div></td>
            </tr>




            <!-- Pending Table -->
            <tr>
                <td>
                    <div class="transparentContainer1">
                        <a name="PendingAppointment"><span style="color: orange;">Pending Appointment</span></a>
                        
                        <!--Table for Pending Appointment-->
                        <table id="pendingTable">
                            <thead>
                            <tr class="FirstRow">
                                <th>No.</th>
                                <th class="centerText">Appointment Date<br>(yyyy/mm/dd)</th>
                                <th class="centerText">Appointment <br>Time</th>
                                <th class="centerText">Selected Hospital</th>
                                <th class="centerText">Patient's Name</th>
                                <th class="centerText">Request Status</th>
                                <th class="centerText">View <br>Details</th>
                                <th class="centerText">Cancel <br>Appointment</th>
                            </tr>
                            </thead>

                            <tbody>
                            
                            <tr style="height: 0.75em; ">
                                <td>
                                </td>
                            </tr>
                            

                            <!-- Dynamic row -->
                            <?php
                            include("connectToDatabase.php");
                            $sql = "SELECT * FROM patientmakeappointmentdetails WHERE PatID=(
                                    SELECT PatID FROM patient WHERE LoginID='".$_SESSION["userID"]."') 
                                    AND ApptStatus='Pending' AND DateChoice LIKE '%".$searchkeyword."%'".
                                    "ORDER BY patientmakeappointmentdetails.DateChoice ".$sortDate;
                            $resultPen = mysqli_query($con,$sql);
                            $numberCounter = 0;
                            
                            
                            if (mysqli_num_rows($resultPen) == 0){
                                echo "<tr><td colspan='8'>";
                                echo "<div style='text-align: center; margin-top: 0.5em; margin-bottom: 0.5em;'>";
                                echo "<img src='img/emptyBox.png' alt='Empty Appointment' width='80px'><br>";
                                echo "There are no more upcoming appointments.<br>";
                                echo "Want to make an appointment? Go to ";
                                echo "<a href='afterLoginAppointmentForm.php' style='color: blue;'>Make An Appointment</a>";
                                echo "</div></td></tr>";
                            }

        
                            while ($row = mysqli_fetch_array($resultPen)) {
                            
                            echo '<tr>';
                                echo '<td class="numberCounter">';
                                    $numberCounter = $numberCounter + 1;
                                    echo $numberCounter;
                                echo '</td>';

                                echo '<td class="centerText">';
                                    echo $row['DateChoice'];
                                echo '</td>';
                                
                                echo '<td class="centerText">';
                                    echo $row['TimeChoice'];
                                echo '</td>';
                                
                                echo '<td class="centerText">';
                                    echo $row['Hospital'];
                                echo '</td>';
                                
                                

                                include("connectToDatabase.php");
                                $sql2 = "SELECT * FROM patient WHERE LoginID='".$_SESSION["userID"]."'";
                                $result2 = mysqli_query($con,$sql2);
                                while ($row2 = mysqli_fetch_array($result2)) {
                                echo '<td class="centerText">';
                                    echo $row2['PatFullName'];
                                echo '</td>';
                                }



                                echo '<td class="centerText" style="color:orange">';
                                    echo $row['ApptStatus'];
                                echo '</td>';


                                echo '<td class="viewDetails">';

                                    echo '<form method="post" target="_self" action="viewAppointmentDetails.php">';
                                    echo '<input type="hidden" name="AppointmentID" value="'.$row['AppointmentID'].'">';
                                        echo '<button style="all:unset;cursor:pointer;" type="submit" name="submitBtn">';
                                            echo '<img src="img/viewDetails.png" id="imageViewDetails"
                                            title="View Details" alt="Click Me for More Appointment Details!"><br>';
                                            echo "VIEW";
                                            // echo '<input type="hidden" name="varnamePass" value="This is a value passed!">';
                                        echo '</button>';
                                    echo "</form>";
                                echo '</td>';


                                echo '<td class="cancelAppt">';
                                    echo '<a href="delete.php?ID=' . $row['AppointmentID'] . 
                                    '" onclick="return confirm(\'Do you confirm to delete ' . $row['DateChoice'] . 
                                    ' ' . $row['TimeChoice'] . ' appointment?\');">CANCEL</a>';
                                echo '</td>';
                            echo '</tr>';
                            }
                            mysqli_close($con);
                            ?>
                            </tbody>
                        </table>

                    </div>
                </td>
            </tr>



            <tr> <!-- Break Between Two Tables -->
                <td><div style="height: 1em;"></div></td>
            </tr>


            
            
            <!-- Fail Table -->
            <tr>
                <td>
                    <div class="transparentContainer1">
                        <a name="FailAppointment"><span style="color: red;">Fail Appointment</span></a>
                        
                        <!--Table for Fail Appointment-->
                        <table id="failTable">
                            <thead>
                            <tr class="FirstRow">
                                <th>No.</th>
                                <th class="centerText">Appointment Date<br>(yyyy/mm/dd)</th>
                                <th class="centerText">Appointment <br>Time</th>
                                <th class="centerText">Selected Hospital</th>
                                <th class="centerText">Patient's Name</th>
                                <th class="centerText">Request Status</th>
                                <th class="centerText">View <br>Details</th>
                                <th class="centerText">Cancel <br>Appointment</th>
                            </tr>
                            </thead>

                            <tbody>
                            
                            <tr style="height: 0.75em; ">
                                <td>
                                </td>
                            </tr>
                            

                            <!-- Dynamic row -->
                            <?php
                            include("connectToDatabase.php");
                            $sql = "SELECT * FROM patientmakeappointmentdetails WHERE PatID=(
                                    SELECT PatID FROM patient WHERE LoginID='".$_SESSION["userID"]."') 
                                    AND ApptStatus='Fail' AND DateChoice LIKE '%".$searchkeyword."%'".
                                    "ORDER BY patientmakeappointmentdetails.DateChoice ".$sortDate;
                            $resultFail = mysqli_query($con,$sql);
                            $numberCounter = 0;
                            

                            if (mysqli_num_rows($resultFail) == 0){
                                echo "<tr><td colspan='8'>";
                                echo "<div style='text-align: center; margin-top: 0.5em; margin-bottom: 0.5em;'>";
                                echo "<img src='img/emptyBox.png' alt='Empty Appointment' width='80px'><br>";
                                echo "There are no more upcoming appointments.<br>";
                                echo "Want to make an appointment? Go to ";
                                echo "<a href='afterLoginAppointmentForm.php' style='color: blue;'>Make An Appointment</a>";
                                echo "</div></td></tr>";
                            }


                            while ($row = mysqli_fetch_array($resultFail)) {
                            
                            echo '<tr>';
                                echo '<td class="numberCounter">';
                                    $numberCounter = $numberCounter + 1;
                                    echo $numberCounter;
                                echo '</td>';

                                echo '<td class="centerText">';
                                    echo $row['DateChoice'];
                                echo '</td>';
                                
                                echo '<td class="centerText">';
                                    echo $row['TimeChoice'];
                                echo '</td>';
                                
                                echo '<td class="centerText">';
                                    echo $row['Hospital'];
                                echo '</td>';
                                
                                

                                include("connectToDatabase.php");
                                $sql2 = "SELECT * FROM patient WHERE LoginID='".$_SESSION["userID"]."'";
                                $result2 = mysqli_query($con,$sql2);
                                while ($row2 = mysqli_fetch_array($result2)) {
                                echo '<td class="centerText">';
                                    echo $row2['PatFullName'];
                                echo '</td>';
                                }



                                echo '<td class="centerText" style="color:red">';
                                    echo $row['ApptStatus'];
                                echo '</td>';


                                
                                echo '<td class="viewDetails">';

                                    echo '<form method="post" target="_self" action="viewAppointmentDetails.php">';
                                    echo '<input type="hidden" name="AppointmentID" value="'.$row['AppointmentID'].'">';
                                        echo '<button style="all:unset;cursor:pointer;" type="submit" name="submitBtn">';
                                            echo '<img src="img/viewDetails.png" id="imageViewDetails"
                                            title="View Details" alt="Click Me for More Appointment Details!"><br>';
                                            echo "VIEW";
                                        echo '</button>';
                                    echo "</form>";
                                echo '</td>';


                                echo '<td class="cancelAppt">';
                                    echo '<a href="delete.php?ID=' . $row['AppointmentID'] . 
                                    '" onclick="return confirm(\'Do you confirm to delete ' . $row['DateChoice'] . 
                                    ' ' . $row['TimeChoice'] . ' appointment?\');">CANCEL</a>';
                                echo '</td>';
                            echo '</tr>';
                            }
                            mysqli_close($con);
                            ?>
                            </tbody>
                        </table>

                    </div>
                </td>
            </tr>


            <tr>
                <td colspan="8" style="text-align: center; vertical-align: middle; background-color: inherit; padding-top: 10px; padding-bottom: 10px;">
                <img src="img/emptyBox.png" width="100" title="Empty Result" alt="Empty Result"><br>
                There are no more appointment.<br>
                Want to make an appointment? Go to <a href="afterLoginAppointmentForm.php" style="color: #001AFF; text-decoration-line: underline;">Make An Appointment</a>
                </td>
            </tr>

            <tr> <!-- Bottom Break -->
                <td><div style="height: 1.75em;"></div>
            </td>
            </tr>

        </table>
        </div>

        <!--footer section-->
        <?php include 'footer.php';?>
                
    </body>

</html>