<?php

  require_once "databaseCon.php";
  
  //To check users DB to login
  function login($user){
    $con = getConnection();
    $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    if($user != null){
        return true;
    }else{
        return false;
    }
  }

  function insertUser($user){
    $con = getConnection();
    $sql = "INSERT into users VALUES('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['email']}', '{$user['email']}')";
    $status = mysqli_query($con, $sql);
    return $status;
  }

  function getAllUser(){
    $con = getConnection();
    $sql = "SELECT * from users";
    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function editUser(){
    $con = getConnection();
    $sql = "UPDATE users SET('{$user['username']}', '{$user['password']}', '{$user['email']}')";
    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function deleteUser(){
    $con = getConnection();
    $sql = "DELETE FROM users WHERE('{$user['id']}')";
    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function getUserByID(){
    $con = getConnection();
    $sql = "SELECT * from users WHERE({$user['id']})";
    $status = mysqli_query($con, $sql);
    return $status;
  }

?>