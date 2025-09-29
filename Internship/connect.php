<?php
    $servername = "localhost";
    $user = "root";
    $password = "@Ch1028nA";
    $db = "intern_application";

    $conn = new mysqli($servername, $user, $password,$db);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error)."<br>";
    }else{
        echo "Connected successfully";
    }
?>