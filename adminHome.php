<!-- Admin UI -->

<!-- PHP -->
<?php

  session_start();

  if(!isset($_COOKIE['status'])){
    header('location: login.php?err=invalid_request');
  }

?>

<!-- HTML -->
<html>
  <head>
    <title>Admin Home</title>
    <link rel="stylesheet" href="style.css" />

    <!-- Header File -->
    <?php include "header_admin.php" ?>

  </head>

  <body>
    <form action="loginCheck.php" method="post" enctype="multipart/form-data">
      <!--
    <table
      border="2"
      align="center"
      width="1080px"
      style="border-collapse: collapse; margin-top: 30px; margin-bottom: 50px;"
    >

    <tr>
      <td>
          <nav style="margin: 10px 10px; display: block; float: left">
            <h1>Train Station System</h1>
            <h5>A Complete Application for Railway Train System</h5>
          </nav>
          <img
            src="img/train-station.png"
            alt="Company Logo"
            width="70px" height="70px"
            style="margin: 30px 20px; 
            float:right"
          />
        </td>
      </tr>
      <tr>
        <td>
          <nav style="margin: 30px 20px; display: block; float: right">
            <a href="adminHome.php">Home</a> |
            <a href="dashboard_admin.php">Dashboard</a> |
            <a href="viewStation.php">Station</a> |
            <a href="viewApplicants.php">Applicants</a> |
            <a href="logout.php">Logout</a>
          </nav>
        </td>
      </tr> -->
    <!-- Top Bars (end) -->

      <tr>
        <td style="padding-bottom: 100px">
          <h2 style="margin: 30px 65px">Welcome Home</h2>

          <p  style="margin: 30px 65px">
          We are delighted to have you among us. On behalf of all the members and the management, we would like to extend our warmest welcome and good wishes! Trains are wonderful. To travel by train is to see nature and human beings, towns and churches, and rivers, in fact, to see life.”. Our goal is to make your life easier from traditional system. Kothin.com is a complete Rail project that can manage a whole system through online. Hopefully, you will have a great  experience through our system. <br> <br> <br> 
        </p>

        <h2 style="margin: 30px 65px">Top Routes and Destinations</h2>

        <nav style="margin: 60px">
        <table style="margin: 40px">
          <tr>
            <td>
            <img src="img/album/train_1.jpg" alt="image_1" width="260px" height="180px">
            </td>
            <td>
            <img src="img/album/train_2.jpg" alt="image_2" width="260px" height="180px">
            </td>
            <td>
            <img src="img/album/train_3.jpg" alt="image_3" width="260px" height="180px">
            </td>
          </tr>
          <tr>
            <td>Rajdhani Express</td>
            <td>Satabdi Express</td>
            <td>Tejas Express</td>
          </tr>
          <tr>
            <td><strong>Dhaka to Kamalapur</strong></td>
            <td><strong>Chittagong to Sylhet</strong></td>
            <td><strong>Noakhali to Dhaka</strong></td>
          </tr>
        </table>
        <br>  
        <h2 style="margin: 30px">Train Station Management System</h2>

        <nav style="margin: 30px">
        <table style="margin: 30px">
        <tr>
            <td><h4>Search</h4></td>
            <td><h4>Select</h4></td>
            <td><h4>Checkout</h4></td>
          </tr>
          <tr>
            <td>
            <img src="img/icons/search.png" alt="search_icon" width="190px" height="190px" style="margin-right: 50px;">
            </td>
            <td>
            <img src="img/icons/select.png" alt="select_icon" width="190px" height="190px" style="margin-right: 50px;">
            </td>
            <td>
            <img src="img/icons/receipt.png" alt="receipt_icon" width="190px" height="190px" style="margin-right: 50px;">
            </td>
          </tr>
          
          <tr>
            <td>
              <p style="margin-top: 15px">Choose your origin, destination, journey dates and search for trains</p>
            </td>
            <td>
              <p>Select your desired trip and choose the class</p>
            </td>
            <td>
              <p>Receive your E-receipt and save it</p>
            </td>
          </tr>
        </table>
        
        <br>
        <table align="center">
          <tr>
          <nav style="margin: 30px;">
          <a href="refundPolicy_cus.php">Refund Policy</a> |
          <a href="facilities_cus.php">Facilities</a> |
          <a href="faq_cus.php">FAQ</a>
          </nav>
          </tr>
          
        </table>
        </td>
      </tr>

      <!-- Footer File <?php //include "footer.php" ?> -->
      
      <tr align="center">
        <td>
          <nav>
            <a href="t&c_log.php">Terms & Conditions</a> |
            <a href="privacyPolicy_log.php">Privacy Policy</a> |
            <a href="aboutUs_log.php">About us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>

    </form>
    
  </body>
</html>
