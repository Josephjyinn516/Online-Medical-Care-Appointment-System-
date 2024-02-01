<?php include 'patientSession.php';?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>View Appointment Details</title>
    <style>
    body{
        font-family: 'DM Sans';
    }

    div.centeredContainerDetails { 
        height: 460px;
        /* position: relative; */
        padding: 10px;
        /* display: flex; */
        justify-content: center;
        line-height: 1.8;
        background-color: #f2fcf2;

        border-radius: 6px;
        border-width: 1px 1px 1px 10px;
        border-style: solid;
        border-color: #009B3E;
    }

    span.boldText{
        text-decoration: dashed;
        font-weight: bolder;
        font-family: inherit;
    }

    button#closeDetailsButton{
        all: unset;
        font-family: inherit;
        cursor: pointer;
        font-style: italic;
        padding: 10px 10px 10px 10px;
        border: 1px solid black;
        border-radius: 6px;
        margin-top: 0em;
        /* width: 98.5%; */
        text-align: center;
        background-color: #009B3E;
        color: floralwhite;
        
    }
    #displayButton{
        padding: 10px 0;
        display: flex;
        justify-content: flex-end;
    }

    </style>
</head>


<body>



<h2 style="text-align: center; "><u>View Appointment Details</u></h2>




<div class="centeredContainerDetails">
<?php
if (isset($_POST['submitBtn']))
{
    // $_POST['AppointmentID']
    include("connectToDatabase.php");
    $sql = "SELECT * FROM patientmakeappointmentdetails WHERE AppointmentID='".$_POST['AppointmentID']."'";
    $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<span class='boldText'>Appointment ID</span>: ".$row['AppointmentID'];
        echo "<br><span class='boldText'>Appointment Status / Request Status</span>: ";

        if ($row == ""){
            $row = "-";
        }


        if ($row['ApptStatus'] == "Successful") {
            echo "<span style='color: #07E607;     
            text-decoration: underline overline;
            font-size: larger;
            '>";
        } elseif ($row['ApptStatus'] == "Pending") {
            echo "<span style='color: orange;
            text-decoration: underline overline;
            font-size: larger;
            '>";
        } elseif ($row['ApptStatus'] == "Fail") {
            echo "<span style='color: red;
            text-decoration: underline overline;
            font-size: larger;
            '>";
        }
        echo $row['ApptStatus'] . "</span><br>";

        echo "<span class='boldText'>Appointed Date</span>: ".$row['DateChoice']."&nbsp (in 'yyyy/mm/dd' format)";
        echo "<br><span class='boldText'>Appointed Time</span>: ".$row['TimeChoice'];
        echo "<br><span class='boldText'>Selected Hospital</span>: ".$row['Hospital'];
        echo "<br><span class='boldText'>Medical Specialty</span>: ".$row['PreferredSpecialty'];

        if ($row['DoctorName'] == ""){
            $row['DoctorName'] = "-";
        }

        echo "<br><span class='boldText'>Doctor's Name</span>: ".$row['DoctorName'];

        if ($row['MedicalConcern'] == ""){
            $row['MedicalConcern'] = "-";
        }

        echo "<br><span class='boldText'>Written Medical Concern</span>: ".$row['MedicalConcern']."<br>";

        $sql2 = "SELECT * FROM patient WHERE LoginID='".$_SESSION["userID"]."'";
        $result2 = mysqli_query($con,$sql2);
        while ($row2 = mysqli_fetch_array($result2)) {
            echo "<br><span class='boldText'>Patient's ID</span>: ".$row2['PatID'];
            echo "<br><span class='boldText'>Patient's Name</span>: ".$row2['PatFullName'];
            echo "<br><span class='boldText'>Patient's IC</span>: ".$row2['PatIC'];
            echo "<br><span class='boldText'>Patient's Phone Number</span>: ".$row2['PatPhoneNumber'];
        }
    }
    mysqli_close($con);

} else {
    echo "Undefined Appointment";
    echo "<script>
    alert('Please select which appointment that you want to view!');
    window.location.href='ManageAppointment.php';
    </script>";
}
    
?>

</div>


<div id="displayButton">
<button onclick='window.location.href="ManageAppointment.php"' id="closeDetailsButton">
Click here to return to Manage Appointment Page
</button>
</div>

</body>

</html>