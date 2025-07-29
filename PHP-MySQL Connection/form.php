<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $nameErr="";
        $gender = $genderErr="";
        $email = $emailErr="";
        if($_SERVER['REQUEST METHOD']=='POST'){
            if(empty($_POST['name'])){
                $nameErr = 'name is required';
            }
            else{
                $name = test_input($_POST['name']);
            }
            if(empty($_post['email'])){
                $emailErr = 'Email is required';
            }
            else{
                //well formate or not
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $emailErr ='Invalid email formate';
                }
            }
            if(empty($_POST['gender'])){
                $genderErr = 'Gender is required';
            }
            else{
                $gender = test_input($_POST['gender']);
            }
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
</body>
</html>