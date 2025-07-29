<?php
    include 'connection.php';
    $sql = "create database musicalDb";

    if($conn->query($sql)){
        echo '<br>Databases is created ';
    }
    else{
        echo '<br>Unsuccess';
    }
?>