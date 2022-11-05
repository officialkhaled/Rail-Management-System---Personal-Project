<?php

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    if ($username == "" || $password == "" || $usertype == "") {
        header('location: login.php?err=null');
    } else {
        $myUser = fopen('users.txt', "r");
        while (!feof($myUser)) {
            $data = fgets($myUser);
            $user = explode(" | ", $data);
            if ($user[0] == $username && $user[1] == $password && $user[2] == $usertype) {
                setcookie('status', 'true', time() + 3600, '/');
                if($usertype == 'admin') {
                    header('location: adminHome.php');
                } else if($usertype == 'employee') {
                    header('location: empHome.php');
                } else if($usertype == 'customer') {
                    header('location: cusHome.php');
                }
                //header('location: cusHome.php');
            }
        }
        echo "<h2> 
        Invalid User <br>
        Please provide correct login information
        </h2>";
        //header('location: login.php');
    }

?>
