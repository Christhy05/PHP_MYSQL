<?php
    include 'connect.php';
    $sql = "CREATE DATABASE intern_application";
    if($conn->query($sql) === TRUE){
        echo "Database created successfully";
    }
    else{
        echo "Error creating database: " . $conn->error;
    }
?>