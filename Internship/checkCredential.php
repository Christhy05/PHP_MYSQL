<?php
  include 'connect.php';
  if($_SERVER['REQUEST_METHOD']==true){
    $emailCred = $_POST['logemail'];
    $passCred = $_POST['logpassword'];

    $sql = "select * from useraccount";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            if($row['email']==$emailCred && $row['password']==$passCred){
                header("location:application.php");
                exit();
            }
            else{
                echo 'UserName or password is Wrong';
            }
        }
    }
    else{
        echo 'Data is not available';
    }
  }
?>