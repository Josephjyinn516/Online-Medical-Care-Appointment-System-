<?php
    $con = mysqli_connect("localhost", "root", "", "wdt");

    if (mysqli_connect_errno())
    {
        echo "Poor connection or connection interrupted. Error number : ".mysqli_connect_errno();
    }

?>