<?php

  session_start();

  if(!isset($_SESSION['status'])){
    header('location: ../login.php');
  }

?>

<html>
<head>
  <title>Main Menu | Admin</title>
  <link rel="stylesheet" href="../../assets/style/styleKhaled.css">
  <style>
    :root {
      --clr-bg: #e7eeef;
      --clr-primary: #243c58;
      --clr-secondary: #5d7793;
      --clr-tertiary: #699cc5;
      --clr-quaternary: #696f6e;
      --clr-accent: rgb(255, 136, 0);
    }

    * {
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: var(--clr-bg);
    }

    .heading {
      font-size: 22px;
      color: var(--clr-accent);
      font-weight: bold;
      margin: 10px 20px;
    }

    a {
      color: var(--clr-primary);
      text-decoration: none;
    }

    .left-section {
      background-color: var(--clr-secondary);
      height: 100%;
      padding: 10px;
      color: #fff;
    }

    .left-section ul {
      list-style-type: none;
      padding: 0;
    }

    .left-section ul li {
      margin: 14px 0;
    }

    .left-section ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 20px;
      display: flex;
      flex-direction: column;
    }

    .left-section ul li a:hover {
      color: var(--clr-accent);
    }

    .right-section {
      background-color: #fff;
      height: 100%;
      padding: 10px;
    }

    .right-section a {
      color: var(--clr-primary);
      text-decoration: none;
      font-size: 18px;
    }

    .right-section a:hover {
      color: var(--clr-accent);
    }

    .right-section fieldset {
      width: 100%;
      height: 80%;
      border: 2px solid var(--clr-primary);
      border-radius: 10px;
      text-align: center;
      padding: 10px;
      align-items: center;
    }

    .right-section fieldset legend {
      color: var(--clr-primary);
      font-weight: bold;
    }

    .right-section fieldset table {
      width: 50%;
      height: 70%;
    }

    .img-box {
      padding-top: 20px;
    }

    label {
      font-size: 18px;
      font-weight: bold;
      color: #000;
    }

    .nav ul li a:focus {
      border-radius: 10px;
      outline: none;
      background: var(--clr-secondary);
      color: #fff;
    }

    .nav ul li a:active {
      border-radius: 10px;
      outline: none;
      background: var(--clr-secondary);
      color: #fff;
    }

    fieldset ul {
      list-style-type: none;
      padding: 20px;
    }

    fieldset ul li {
      margin: 14px 0;
      font-weight: bold;
    }
    </style>
</head>
<body>

<div class="wrap">
  <div class="header">
    <div class="logo-img">
      <img src="..\..\assets\img\logo.png" alt="logo">
    </div>
    <div class="title">
      <center><h3 class="title">RailSheba</h3></center>
    </div>
  </div>  
  <div class="nav"><?php include_once '../../assets/common/adminNavbar.php'; ?></div>

  <div class="container">
    <!-- Admin UI -->
    <table align="center" width="100%" height="100%" style="border-collapse: collapse">
      <tr>
        <td class="right-section" style="padding: 80px">
          <fieldset>
            <legend>MAIN MENU</legend>
            <ul style="margin-left: 20px; margin-top: 20px">
            <li><p style="color: rgb(255, 136, 0);">Choose your option</p><hr></li>
            <li><a href="viewProfileAdmin.php">View Profile</a></li>
            <li><a href="editProfileAdmin.php">Edit Profile</a></li>
            <li><a href="#">Change Profile Picture</a></li>
            <li><a href="#">Edit Album</a></li>
            <li><a href="viewUsers.php">User List</a></li>
          </ul>
          </fieldset>
        </td>
      </tr>
    </table>
  </div>

  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
  </div>

</div>
</body>
</html>


