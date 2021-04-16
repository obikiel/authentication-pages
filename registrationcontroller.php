<?php

    $file ='Array.php';
    if (isset($_POST['register'])) 
  
    {

        $name = $_POST['name'];
        $username = $_POST['username'];
        $number = $_POST['number'];
        $track = $_POST['track'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmpassword'];
        $infos =['name'=>$name,
                 'username'=>$username,
                 'number'=>$number,
                 'track'=>$track,
                 'email'=>$email,
                 'password'=>$password,
                 'confirm_password'=>$confirm_password];
        
        if ($password==$confirm_password)
        {
            file_put_contents($file.$infos['firstname'].".json",json_encode($infos).PHP_EOL,FILE_APPEND);
            header('location:login.php');
        }
        else{
            echo '<script type="text/javascript">';
            echo 'alert("your passwords do not match")';
            echo '</script>';

        }
    }  
        
?>