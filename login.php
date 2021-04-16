<?php
    include('logincontroller.php')    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form id="login-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="username" placeholder="user name"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" name="submit" value="login">
        <p> don't have an account yet, please <a href="registration.php">register</a></p>
        <p> forgot password? <a href="reset_password.php">reset password</a></p>
    </form>
    
</body>
</html>