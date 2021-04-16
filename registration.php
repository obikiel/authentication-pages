<?php
    include('registrationcontroller.php');
?>
<!DOCTYPE html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>

    <form id="registration-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
        <input type="text" required name="name" placeholder="full name"><br><br>
        <input type="text" required name="username" placeholder="username"><br><br>
        <input type="number" required name="number" placeholder="phone-number"><br><br>
        <input type="text" required name="track" placeholder="track"><br><br>
        <input type="email" required name="email" placeholder="email"><br><br>
        <input type="password" required name="password" placeholder="password"><br><br>
        <input type="submit" name="register" value="register">
        </fieldset>
    </form>
    <div class="return"><button><a href="index.php">landing page</a></button>
    <div class="return2"><button><a href="login.php">Login</a></button>
</body>
</html>