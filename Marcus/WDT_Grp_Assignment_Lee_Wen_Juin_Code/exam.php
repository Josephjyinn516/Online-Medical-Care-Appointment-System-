<?php

    $fruits = array("Grape"=>"Purple", "Strawberry"=>"Red", "Guava"=>"Green");

    echo "<table border=\"1\"><tr><th>Fruit Name</th><th>Fruit Color</th></tr>";
    foreach ($fruits as $key=> $val) {
    echo "<tr><td>"."$key"."</td><td>".$val ."</td>";
    }
    echo"</table>";

?>