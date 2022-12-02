<!--
 

 Customer Navbar 
  <a href="../views/cusHome.php">Home</a> |
  <a href="../views/menu_cus.php">Menu</a> |
  <a href="../views/eals&offers.php">Deals/Offers</a> |
  <a href="../views/counters.php">Counters</a> |
  <a href="../views/feedback.php">Feedback</a> |
  <a href="../controllers/logout.php">Logout</a>

 Employee Navbar 
  <a href="adminHome.php">Home</a> |
  <a href="menu_emp.php">Menu</a> |
  <a href="viewStation.php">Station</a> |
  <a href="viewApplicants.php">Applicants</a> |
  <a href="../controllers/logout.php">Logout</a>
-->
<?php

  session_start();

?>

<html>
<head>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<!-- header -->
  <div class="header">
    <h1>Kothin<span id="logo">Train</span></h1>
    <p>Get your train online</p>
  </div>

<!-- navbar -->
  <div class="navbar">
    <?php
      if(isset($_SESSION['user'])){
        if($_SESSION['user']['type'] == "admin"){
          //include_once '../common/header.php';
          include_once '../common/adminNavbar.php';
        }
        else if($_SESSION['user']['type'] == "customer"){
          //include_once '../common/header.php';
          include_once '../common/cusNavbar.php';
        }
        else if($_SESSION['user']['type'] == "employee"){
          //include_once '../common/header.php';
          include_once '../common/empNavbar.php';
        }
      }
      else{
        //include_once '../common/header.php';
        include_once '../common/publicNavbar.php';
      }
    ?>
  </div>

  