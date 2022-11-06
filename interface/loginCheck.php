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
                    setcookie('status', 'true', time() + 3000, '/');
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
/*
    if ($username == "" || $password == "" || $usertype == "") {
        header('location: login.php?err=null');
    } else {
        $myUser = fopen('users.txt', "r");
        while (!feof($myUser)) {
            $data = fgets($myUser);
            $user = explode(" | ", $data);
            if ($user[0] == $username && $user[1] == $password && $user[2] == $usertype) {
                if(strlen($username)<2) {
                    setcookie('status', 'true', time() + 3000, '/');
                    if($usertype == 'admin') {
                        header('location: adminHome.php');
                    } else if($usertype == 'employee') {
                        header('location: empHome.php');
                    } else if($usertype == 'customer') {
                        header('location: cusHome.php');
                }
                } else if((substr_count($username,'@')>0) || (substr_count($username,'#')>0) || (substr_count($username,'$')>0) || (substr_count($username,'%')>0) || (substr_count($username,'/')>0) || (substr_count($username,'*')>0) || (substr_count($username,'+')>0) || (substr_count($username,'(')>0) || (substr_count($username,')')>0) || (substr_count($username,'!')>0) || (substr_count($username,'^')>0)) {
                        setcookie('status', 'true', time() + 3000, '/');
                    if($usertype == 'admin') {
                        header('location: adminHome.php');
                    } else if($usertype == 'employee') {
                        header('location: empHome.php');
                    } else if($usertype == 'customer') {
                        header('location: cusHome.php');
                    }
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
////
    if($username == "" || $password == "" ){
        echo "<h2> Validation failed: Username or Password is missing! </h2>";
    }
	else if(strlen($username)<2){
        echo "<h2>Validation failed: Username must be at least 2 characters long! </h2>";
    }
	else if((substr_count($username,'@')>0) || (substr_count($username,'#')>0) || (substr_count($username,'$')>0) || (substr_count($username,'%')>0) || (substr_count($username,'/')>0) || (substr_count($username,'*')>0) || (substr_count($username,'+')>0) || (substr_count($username,'(')>0) || (substr_count($username,')')>0) || (substr_count($username,'!')>0) || (substr_count($username,'^')>0)){
        echo "<h2> Validation failed: Username can contain alpha numeric characters, period, dash or underscore only! </h2>";
    }
	
    // PASSWORD VALIDATION
	else if(strlen($password)<8){
        echo "<h2> Validation failed: Password must be at least 8 characters long! </h2>";
    }
	else if((substr_count($password,'@')<1) && (substr_count($password,'#')<1) && (substr_count($password,'$')<1) && (substr_count($password,'%')<1)){
        echo "<h2> Validation failed: Password must contain at least one special character (@, #, $, %) </h2>";
    }
	
	else{
        echo "<h1> Validation Successful!  </h1>";
    }   
*/
?>
