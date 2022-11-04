<?php

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" || $password == "") {
        header('location: login.php?err=null');
    } else {
        $myUser = fopen('users.txt', "r");
        while (!feof($myUser)) {
            $data = fgets($myUser);
            $user = explode(" | ", $data);
            if ($user[0] == $username && $user[1] == $password) {
                setcookie('status', 'true', time() + 3600, '/');
                header('location: cusHome.php');
            }
        }
        echo "<h2> 
        Invalid User <br>
        Please provide correct login information
        </h2>";
        //header('location: login.php');
    }

?>
