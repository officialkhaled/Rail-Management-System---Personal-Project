<?php

  session_start();
  require_once '../../models/userModel.php';

  if(!isset($_SESSION['status'])){
    header('location: ../login.php');
  }

  $id = $_GET['update'];

  $con = getConnection();
  $sql = "SELECT * FROM user WHERE id='$id'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

  $name = $row['name'];
  $username = $row['username'];
  $password = $row['password'];

  if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE user SET name='$name', username='$username', password='$password' WHERE id='$id'";

    $result = mysqli_query($con, $sql);

    if($result) {
      header('location: viewUsers.php');
    } else {
      echo "Error";
    }
  }

?>

<html>
<head>
  
  <title>Update User | Admin</title>
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
    #search {
      width: 80%;
      height: 50px;
      border-radius: 10px;
      border: none;
      padding: 10px;
      margin: 10px;
      background: var(--clr-bg);
    }

    #search:focus {
      outline: none;
    }

    #search:hover {
      border: 1px solid var(--clr-accent);
    }

    #click {
      background: var(--clr-secondary);
      color: #fff;
      border-radius: 10px;
      border: none;
      padding: 6px;
      width: 20%;
    }

    #click:hover {
      background: var(--clr-accent);
      color: #fff;
    }

    #blur {
      background: var(--clr-secondary);
      color: #fff;
      border-radius: 10px;
      border: none;
      padding: 6px;
      width: 8%;
      opacity: 40%;
    }

    #blur:hover {
      opacity: 100%;
      background: var(--clr-secondary);
      color: #fff;
    }

    #searchResult {
      margin-top: 40px;
    }
    .table {
      border-collapse: collapse;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      width: 100%;
    }

    .table td, .table th {
      
      padding: 8px;
    }

    .table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: var(--clr-primary);
      color: white;
    }

    .text-danger {
      margin-top: 50px;
      color: red;
    }

    #searchErr {
      color: red;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 50px;
    }

    .update-btn {
      width: 100%;
      height: 40px;
      border-radius: 10px;
      border: none;
      background: var(--clr-secondary);
      color: #fff;
    }

    .update-btn:hover {
      background: var(--clr-accent);
      color: #fff;
    }

    #showhidepwd{
      font-size: 18px;
      margin-left: 8px;
    }

    #showPass-card {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 50px;
    }

    .err-text{
      color: tomato;
      font-size: 16px;
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
      <center><h3 class="title">Kothin<span style="color: rgb(255, 136, 0);">Train</span></h3></center>
    </div>
  </div>  
  <div class="nav"><?php include_once '../../assets/common/adminNavbar.php'; ?></div>

  <div class="container">
    <!-- Admin UI -->
    <table align="center" width="100%" height="100%" style="border-collapse: collapse">
      <tr>
        <td class="right-section" style="padding: 80px">
          <fieldset>
            <legend>Update User Info</legend>
              <form action="" method="post" onkeyup="return validateUpdateForm()" onsubmit="return validateUpdateForm()">
                <table class="table">
                  <tr>
                    <td><label for="name">Name</label></td>
                    <td><input type="text" id="name" name="name" value=<?php echo $name ?>></td>
                  </tr>
                  <tr>
                    <td colspan="2"><center><span id="nameErr" class="err-text"></span></center></td>
                  </tr>
                  <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" id="username" name="username" value=<?php echo $username ?>></td>
                  </tr>
                  <tr>
                    <td colspan="2"><center><span id="unameErr" class="err-text"></span></center></td>
                  </tr>
                  <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id="password" name="password" value=<?php echo $password ?>></td>
                  </tr>
                  <tr>
                    <td colspan="2"><center><span id="passErr" class="err-text"></span></center></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div id="showPass-card">
                        <input type="checkbox" id="showPass" onchange="return SHPassword(this);"><span id="showhidepwd">Show Password</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><center><button type="submit" name="update" class="update-btn">Update</button></center></td>
                  </tr>
                </table>
              </form>
          </fieldset>
        </td>
      </tr>
    </table>
  </div>

  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
  </div>

</div>

  <script src="../../assets/js/formValidate.js"></script>

</body>
</html>


