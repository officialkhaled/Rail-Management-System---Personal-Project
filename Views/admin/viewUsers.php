<?php

  session_start();

  if(!isset($_SESSION['status'])){
    header('location: ../login.php');
  }

  require_once '../../models/userModel.php';

?>

<html>
<head>
  
  <title>User List | Admin</title>
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

    #delete-btn {
      background-color: red;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 18px;
      font-weight: bold;
    }

    #delete-btn:hover {
      background-color: var(--clr-accent);
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
    }

    #update-btn {
      background-color: green;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 18px;
      font-weight: bold;
    }

    #update-btn:hover {
      background-color: var(--clr-accent);
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
    }

    #list-table {
      border-collapse: collapse;

      width: 100%;
    }

    #refresh-btn{
      background-color: var(--clr-primary);
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 18px;
      font-weight: bold;
    }
    
    #refresh-btn:hover{
      background-color: var(--clr-accent);
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
    }

    #list-table th {
      padding: 8px;
      text-align: center;
    }

    #list-table td {
      padding: 8px;
      text-align: center;
    }

    #list-table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #list-table tr:hover {
      background-color: #ddd;
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
    <table
      align="center"
      width="100%"
      height="100%"
      style="border-collapse: collapse"
    >
      <tr>
        <!-- SIDEBAR -->
        <td class="left-section" style="padding-bottom: 100px">
          <h4 class="heading">User List</h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
            <li><a href="menuAdmin.php">Main Menu</a></li>
            <li><a href="viewProfileAdmin.php">View Profile</a></li>
            <li><a href="editProfileAdmin.php">Edit Profile</a></li>
            <li><a href="#">Change Profile Picture</a></li>
            <li><a href="#">Edit Album</a></li>
            <li><a href="viewUsers.php">User List</a></li>
          </ul>
        </td>

        <!-- MAIN CONTENT -->
        <td class="right-section" style="padding: 80px">
          <fieldset>
            <legend>LIST OF USERS</legend>
            <form
              action=""
              method="post"
              enctype="multipart/form-data"
            >
              <table id="list-table" align="center">
                <tr>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Usertype</th>
                  <th colspan="2">Action</th>
                  <th><button id="refresh-btn" onclick="location.reload()">Refresh</button></th>
                </tr>

                <!-- PHP Integration -->
                <?php
                            
                  $con = getConnection();

                  $sql = "SELECT * FROM user";
                  $result = mysqli_query($con, $sql);

                  if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";

                      echo "<td><center>{$row['name']}</center></td>";
                      echo "<td><center>{$row['username']}</center></td>";
                      echo "<td><center>{$row['usertype']}</center></td>";
                      
                      // UPDATE BUTTON
                      ?>
                      <td><center><a id="update-btn" href="updateUserInfo.php?update=<?php echo $row['id']; ?>">Update</a></center></td>
                      <?php

                      // DELETE BUTTON
                      ?>
                      <td><center><a id="delete-btn" href="viewUsers.php?delete=<?php echo $row['id']; ?>">Delete</a></center></td>
                      <?php

                      echo "</tr>";
                    }
                  } else {
                    echo "<td colspan=\"3\">No data found</td>";
                  }

                  ?>

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
</body>
</html>


<?php 

  if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    $user = deleteUser($id);

    if($user == true) {
      header('location: viewUsers.php');
    } else {
      echo "<h2>Error deleting record: </h2>" . mysqli_error($con);
    }

  }

?>