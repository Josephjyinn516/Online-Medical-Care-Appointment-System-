<?php include 'patientSession.php';?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Appointment Form</title>

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="PastDateInvalid.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="changedateformat.js"></script>
        
        <!-- CSS -->
        <link href="beforeLogin_homepage.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="changedateformat.css">
        <link href="AppointmentFormCSS.css" rel="stylesheet">

    </head>


    <body>

    <?php include 'backToTopButton.php';?>
    <!-- header -->
    <?php include 'afterLoginHeader.php';?>

        <!-- CONTENT section -->        
        <ul class="centerUpperBox">
            <a href="afterLoginAppointmentForm.php"><input type="button" value="Make An Appointment" title="Make An Appointment" id="makeAnApp"></a>
            <a href="ManageAppointment.php"><input type="button" value="Manage My Appointment(s)" title="Manage My Appointment(s)" id="manageApp"></a>
        </ul>
    

    <script>
    function displaySection(){
        var x = document.getElementById("abc2");
        if (x.style.display == "block")
        {
            x.style.display = "none";
        }
        else {
            x.style.display = "block";
        }
    }
    </script>

    <!-- FORM -->
    <form action="patientMakeAppt.php" method="post" style="font-family: 'DM Sans'">
    
        <div class="tableContainer">
        <table id="myform">

        <!-- Appointment Details -->
        <tr>
            <th>
                
                <div class="transparentContainer">
                    <span class="tableTitle">Appointment Details</span>
                    <button type="button" id="clickOnInfoImage" class="onImageClick" onclick="displaySection()" style="cursor: pointer;">
                    &nbsp;&nbsp;
                    <img src="img/info.png" title="Click Me for More Info!" alt="Click Me for More Info!" 
                    id="infoImage">
                    <span style="color: rgb(144, 144, 144); font-size: 15px; margin-left: 1px;">
                        Click Me For More Info!
                    </span>
                    
                    </button>
       
    
                    <div class="infoText2" id="abc2" style="display:none">
                        <div class="blueContainer">
                            Please fill in the <span class="redColorRequired">REQUIRED (*)</span> fields to make an appointment. <br>
                            Click <u>"Make An Appointment"</u> after you have fill in all the required details. <br>
                            Click <u>"Reset / Clear form"</u> if you want to remove all the details that you have input.
                        </div>
                    </div>
    
    
                </div>
            </th>
        </tr>
        

        <tr>
            <th>
                <div class="transparentContainer">
                <div class="labelfontSpacing">
                    <label class="labelfontSize"><span class="labelFont">Hospital </span><span class="redColorRequired">*</span></label> <br>
                </div>
    
                <select name="hospital" required="required">
                    <option value="">Select Hospital</option>
                    <option value="Hospital Klang">Hospital Klang</option>
                    <option value="Hospital Cheras">Hospital Cheras</option>
                </select>
                </div>
            </th>
        </tr>
        
        <tr>
            <th>
                <div class="transparentContainer">
                
                <div class="labelfontSpacing">
                    <label class="labelfontSize"><span class="labelFont">Preferred Doctor</span></label> <br>
                </div>
                <select name="doctor">
                        <option value="">Select Preferred Doctor</option>
                        <optgroup label="Hospital Klang">
                            <option value="Dr. Elizabeth White">Dr. Elizabeth White</option>
                            <option value="Dr. Chen Ming Hou">Dr. Chen Ming Hou</option>
                            <option value="Dr. Leonard Smith">Dr. Leonard Smith</option>
                        </optgroup>
    
                        <optgroup label="Hospital Cheras">
                            <option value="Dr. Azura binti Elias">Dr. Azura binti Elias</option>
                            <option value="Dr. Maya Morrison">Dr. Maya Morrison</option>
                            <option value="Dr. Tan Hou Wei">Dr. Tan Hou Wei</option>
                        </optgroup>
                </select>
                </div>
            </th>
        </tr>
        
        <tr>
            <th>
                <div class="transparentContainer">
                
                <div class="labelfontSpacing">
                    <label class="labelfontSize"><span class="labelFont">Preferred Medical Specialty </span><span class="redColorRequired">*</span></label> <br>
                </div>
                
                <select name="specialty" required="required">
                        <option value="">Select Specialty</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Physiotherapy">Physiotherapy</option>
                </select>
                </div>
            </th>
        </tr>

        
        <tr>
            <th>
                <div class="transparentContainer">
                <div class="labelfontSpacing">
                    <label class="labelfontSize"><span class="labelFont">Write Your Medical Request / Medical Service</span></label> <br>
                </div>
                <textarea name="medicalRequest" placeholder = "Medical Problem / Medical Concern ?"></textarea>
                </div>
            </th>
        </tr>
    
        <tr>
            <th style="height: 90px;">
                <div class="greenContainer">
                <div class="labelfontSpacing">
                    <label class="labelfontSize"><span class="labelFont">Preferred Appointment Date & Time </span><span class="redColorRequired">*</span></label> <br>
                </div>
    
                
                <input type="date" data-date="" data-date-format="DD MMMM YYYY"
                name="inputdate" required="required" id="inputdate" value="2023-01-01">
                <script src="changedateformat.js"></script>
    
    
                
                <select name="selectTime" required="required" id="selectTime"
                style="margin-top: 1em; margin-bottom: 5px;">
                    <option value="">Select Time</option>
                    <optgroup label="Morning">
                        <option value="9am">9am</option>
                        <option value="10am">10am</option>
                        <option value="11am">11am</option>
                    </optgroup>
                    <optgroup label="Afternoon">
                        <option value="2pm">2pm</option>
                        <option value="3pm">3pm</option>
                        <option value="4pm">4pm</option>
                    </optgroup>
                </select>
                
                </div>
            </th>
        </tr>
    
        <tr><th style="height: 20px;"></th></tr>
    
        <!--Important Note for User-->
        <tr>
            <th>
                <div class="redContainer">
                    <ul class="notice">
                        <li style="color: #FF0000;margin-bottom:0.3em;">Please allow <b><u>1 working day</u></b> for confirmation on your appointment. </li>
                        <li style="color: #FF0000;margin-bottom:0.3em;">It is also important to note that your request for an appointment <b><u>is not confirmed</u></b> until you receive a response from us.</li>
                        <li style="color: #FF0000;">The ongoing appointment time may have <b><u>slight changes</u></b> due to doctor's schedule.</li>
                    </ul>
                </div>
            </th>
        </tr>
    

        <tr>
            <th>
                <div>
                    <br>
                </div>
            </th>
        </tr>
    

        
        <script>
        function displaySection2(){
            var y = document.getElementById("abc3");
            if (y.style.display == "block")
            {
                y.style.display = "none";
            }
            else {
                y.style.display = "block";
            }
        }
        </script>
        
        <!--Patient Details-->
        <tr>
            <th>
                
                <div class="transparentContainer">
                    <span class="tableTitle">Patient Details</span>
                    <button type="button" id="clickOnInfoImage" class="onImageClick" onclick="displaySection2()" style="cursor: pointer;">
                    &nbsp;&nbsp;
                    <img src="img/info.png" title="Click Me for More Info!" alt="Click Me for More Info!" 
                    id="infoImage">
                    <span style="color: rgb(144, 144, 144); font-size: 15px; margin-left: 1px;">
                        Click Me For More Info!
                    </span>
                    
                    </button>
    
                        
    
                    <div class="infoText2" id="abc3" style="display:none">
                        <div class="blueContainer">
                            These fields will be automatically filled out based on the <u>user profile</u>!
                            <br><span style="color: #FF0000;">If the user profile is not filled up, appointment form cannot be submitted!<span>
                        </div>
                    </div>
        
                </div>
            </th>
        </tr>
    
        <tr>
            <th>
                <div class="transparentContainer">
                    <div class="labelfontSpacing">
                        <label class="labelfontSize"><span class="labelFont">Patient ID </span><span class="redColorRequired">*</span></label> <br>
                    </div>

                    <?php
                    include("connectToDatabase.php");
                    $sql = "SELECT * FROM patient WHERE LoginID='".$_SESSION["userID"]."'";

                    $result = mysqli_query($con,$sql);
                    while ($row = mysqli_fetch_array($result)) {
                        
                    ?>

                    <input type="text" name="patientID" required="required"
                    value="<?php echo $row["PatID"]; ?>"
                    readonly>

                </div>
            </th>
        </tr>
    
        <tr>
            <th>
                <div class="transparentContainer">
                    <div class="labelfontSpacing">
                        <label class="labelfontSize"><span class="labelFont">Patient Name </span><span class="redColorRequired">*</span></label> <br>
                    </div>
                    <input type="text" name="patientName" required="required" 
                    value="<?php echo $row["PatFullName"]; ?>"
                    readonly>
                </div>
            </th>
        </tr>
    
        <tr>
            <th>
                <div class="transparentContainer">
                    <div class="labelfontSpacing">
                        <label class="labelfontSize"><span class="labelFont">Patient IC </span><span class="redColorRequired">*</span></label> <br>
                    </div>
                    <input type="text" name="patientIC" required="required"
                    value="<?php echo $row["PatIC"]; ?>"
                    readonly>
                </div>
            </th>
        </tr>
    
        <tr>
            <th>
                <div class="transparentContainer">
                    <div class="labelfontSpacing">
                        <label class="labelfontSize"><span class="labelFont">Patient Contact Number / Phone Number </span><span class="redColorRequired">*</span></label> <br>
                    </div>
                    <input type="text" name="patientPhoneNo" required="required"
                    value="<?php echo $row["PatPhoneNumber"]; ?>"
                    readonly>
                </div>
            </th>
        </tr>

        

        <tr>
            <th>
                <div id="note">
                    Note: * means the field is mandatory.
                </div>
            </th>
        </tr>


        <?php
        if ($row["PatID"]=="" or $row["PatFullName"]=="" or $row["PatIC"]=="" or $row["PatPhoneNumber"]==""){
        echo '<tr><th><div class="transparentContainer" style="color:#FF7B13; text-shadow: 1px 2px 9px rgba(255, 123, 19, 0.4); 
        text-align: center; font-size: larger;">';
        echo '!!! Your user details is <u>not completely filled up</u>, so the appointment form cannot be submitted !!!</div>';
        echo '<div class="transparentContainer" style="color:blue; text-align: center; font-size: larger;">
        Go to <a href=""><u>User Profile Page</u></a> to complete user details
        </div>';
        echo '</th></tr>';
        // this put disabled to button if user have not entered the patient details
        

        echo
        '<tr>'.
            '<th>'.
                '<div class="submitresetbuttoncontainer">';
                echo '<input type="submit" name="submitbtn" value="Make An Appointment" disabled style="color:grey; border-color: grey; background-color:white;">';
        } 
        else{
        echo
        '<tr>'.
            '<th>'.
                '<div class="submitresetbuttoncontainer">';
            echo '<input type="submit" name="submitbtn" value="Make An Appointment" 
            onclick="return confirm(\'Are you sure to submit appointment form?\');">';

        }
        ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="resetbtn" value="Reset / Clear Form">
        
                </div>
            </th>
        </tr>
        
        

        </table>
        </div>
    
        </form> 


        <!--footer section-->
        <?php include 'footer.php';?>
    </body>

<?php

}
mysqli_close($con);

?>

</html>