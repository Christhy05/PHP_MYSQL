<?php
    include 'connect.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        $email = $_POST['Email'];
        $password = $_POST['password'];

        $sql = "insert into useraccount values
                ('$name','$email','$password')";

        if($conn->query($sql)==true){
            echo "New record created successfully";
            header("location:login.php");
            exit();//ensures PHP stops executing further.
        }
        else{
            echo "Error: Unsuccessful";
        }

    }
?>