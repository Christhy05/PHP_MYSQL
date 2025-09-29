<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
</head>
<body>
    <form method="post" action="checkCredential.php">
        <h3>Login</h3>
        <label for="Email">Email:</label><br>
        <input type="email" id="email" name="logemail" required><br><br>

        <label for="password">Password :</label><br>
        <input type="password" id="pw" name="logpassword" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>