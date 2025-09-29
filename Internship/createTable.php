<?php
    include 'connect.php';
    $sql = "create table useraccount
            (username varchar(30) primary key,
            email varchar(50),
            password varchar(30))";
    $sql1 = "create table candidate
            (Aname varchar(50) primary key,
            Aemail varchar(50),
            Aphone long,
            Adob date,
            Aaddress varchar(80),
            Acoll varchar(50),
            Adegree varchar(50),
            Afeild varchar(50),
            Ayr int,
            Aintrest varchar(50),
            Aavailable varchar(50))";
            
    if($conn->query($sql) === TRUE){
        echo "<br>Table useraccount created successfully <br>";
        if($conn->query($sql1) === TRUE){
            echo "<br>Table candidate created successfully <br>";
        }
        else{
            echo "<br>Error creating table:candidate" . $conn->error;
        }
    }
    else{
        echo "<br>Error creating table:useraccount" . $conn->error;
    }
?>