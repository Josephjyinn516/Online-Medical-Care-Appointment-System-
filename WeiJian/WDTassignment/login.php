<!DOCTYPE html>
<?php
include("connectToDatabase.php");
session_start();
if(isset($_POST["login"])){

    $sql = "SELECT * FROM logincredential WHERE Email = '" . $_POST["userEmail"] . "' AND Password = '" . $_POST["userPass"] . "'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if($row) {
        $_SESSION["userID"] = $row["LoginID"];
        $_SESSION["userType"] = $row["Type"];

        #check is patient or not#
        if($_SESSION["userType"] == "0"){
            echo "<script>window.location.href='afterLogin_homepage.php';</script>";
        }
        #check is doctor or not#
        else if($_SESSION["userType"] == "1"){
            echo "<script>window.location.href='http://localhost/WDT%20Final%20Project/JunHinn/JunHinnFinalWDT/Medic%20Info/Medic%20Info.php';</script>";
        }
    } else {
        $message = "Wrong Email or Password, Please Try Again";
    }

}

?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Login Page</title>
        
        
        <link href="login.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    </head>
    
        <body>
            <!--some space before icon-->
            <br><br>
            <!--the icon/title-->
            <img src="img/Green House Care Real Estate Logo.png">
            <h2>Login</h2>
            <p>Login now and start to book<br>an appointment with our professional doctor</p>

            <!--login Input-->
            <div class="login">
                <form method="post" action="">
                    <div><?php if(isset($message)) { echo $message; } ?></div>
                    
                    <!--email part-->
                    <input type="email" id="userEmail" name="userEmail" placeholder="Your email" required/>
                    <br>
                    
                    <!--password part-->
                    <input type="password" id="userPass" name="userPass" placeholder="Your password" required/>
                    <br>

                    <!--signup button-->
                    <p>No account?<a href="signup.html">&nbsp;Sign up Now!</a></p>

                    <!--login button-->
                    <input type="submit" id="login" name="login" value="Login">
                </form>
            </div>
        </body>
</html>