<?php
    $servername = 'localhost';
    $user = 'root';
    $password = '@Ch1028nA';
    $db ='musicalDb';

    $conn = new mysqli ($servername,$user,$password,$db);
    if($conn->connect_error){
        die('connection failed'.$conn->connect_error);
    }
    else{
        echo 'connection successfull';
    }

?>