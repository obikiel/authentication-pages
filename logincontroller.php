<?php
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    $myfile = "Array.php";
    $fh =fopen($myfile, 'r');
    $thedata = fread($fh, filesize($myfile));
    $assoc_array = array();
    $my_array = explode("\n", $thedata);
    foreach($my_array as $line)
    {
        $tmp = explode(" ", $line);
        $assoc_array[$tmp[0]] = $tmp[1];
    }
    fclose($fh);
    $data = $assoc_array;
    
    $uname = $data['Username'];
    $pwd = $data['Password'];
    echo $uname."<br>";
    echo $pwd;
    ?>
    
 
