<?php 
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conPass = $_POST['conPass'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];

    /*
    if($name == "" || $email == "" || $username == "" || $password == "" || $gender == "" || $date == "" || $conPass == "") {
        header('location: register.php?err=null');
    }else{
        $user = [ 'name' => $name, 'email' => $email, 'username'=> $username, 'password' => $password, 'gender'=> $gender, 'date' => $date];
        $_SESSION['user'] = $user;
        $user = $username." | ".$password." | ".$name." | ".$email." | ".$gender." | ".$date."\r\n";
        $file = fopen('user.txt', 'a');
        fwrite($file, $user);
        fclose($file);
        header('location: login.php');
    }
    */

    if($name == "" || $email == "" || $username == "" || $conPass == "" ||$password == "" || $gender == "" || $date == "") {
        header('location: register.php?err=null');
    }else{
        $user = [ 'name' => $name, 'email' => $email, 'username'=> $username, 'password' => $password, 'gender'=> $gender, 'date' => $date];
        $_SESSION['user'] = $user;
        $user = $username." | ".$password."\r\n";
        $file = fopen('user.txt', 'a');
        fwrite($file, $user);
        fclose($file);
        header('location: login.php');
    }

?>