<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form method="post" action='insertdata.php'>
        <h3>Registration Form</h3>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="Email">Email:</label><br>
        <input type="email" id="Email" name="Email" required><br><br>

        <label for="password">Password :</label><br>
        <input type="password" id="pw" name="password" required><br><br>

        <input type="submit" value="Register">

    </form>

</body>
</html>