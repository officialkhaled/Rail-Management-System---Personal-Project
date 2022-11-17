<?php 

    session_start();
    require_once "../models/userModel.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conPass = $_POST['password'];
    //$usertype = $_POST['usertype'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if($name == "" || $email == "" || $username == "" || $password == "" || $conPass == "" || $gender == "" || $dob == "") {
        header('location: ../views/register.php?err=null');
    } 
    else{
        $user = ['username' => $username, 'password'=> $password, 'name' => $name, 'email' => $email, 'gender'=> $gender, 'dob' => $dob];

        $status = insertUser($user);

        if($status){
            header('location: ../views/login.php');
        } else{
            echo "Database Error!";
        }
    }
    
?>
<!--
    if($name == "" || $email == "" || $username == "" || $password == "" || $conPass == "" || $gender == "" || $dob == "") {
        header('location: register.php?err=null');
    } 
    else{
        $myUser = fopen("users.txt", "a") or die("Unable to open file!");
        $_SESSION['users'] = $myUser;
        
        $info = ['username' => $username, 'password'=> $password, 'name' => $name, 'email' => $email, 'gender'=> $gender, 'dob' => $dob];

        $info = $username." | ".$password." | ".$name." | ".$email." | ".$gender." | ".$dob."\r\n";

        fwrite($myUser, $info);
        fclose($myUser);
        header('location: login.php');
    }
-->

