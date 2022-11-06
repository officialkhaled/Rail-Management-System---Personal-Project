<!-- Public UI -->

<!-- PHP -->
<?php 

    if(isset($_POST['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "<h2> Invalid request error! </h2>";
        }

        if($_POST['err'] == 'null'){
            echo "<h2> Missing Fields! </h2>";
        }
    }
    
?>

<!-- HTML -->
<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Header File -->
    <?php include "header.php" ?>
  </head>
  <body>
    <!--
    <table
    border="2"
      align="center"
      width="860px"
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
            <a href="publicHome.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="register.php">Registration</a> |
            <a href="deals&offers_pub.php">Deals/Offers</a> |
            <a href="counters.php">Counters</a> |
            <a href="contactUs.php">Contact Us</a>
          </nav>
        </td>
      </tr> -->
    <!-- Top Bars (end) -->

      <tr>
        <td style="padding: 80px">
          <form action="regCheck.php"  method="post" enctype="multipart/form-data">
            <fieldset>
              <legend>REGISTRATION</legend>
              <table>
                <tr>
                  <td>Name</td>
                  <td>:</td>
                  <td><input type="text" name="name" value="" /></td>
                </tr>

                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td><input type="email" name="email" value="" /></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td><input type="text" name="username" value="" /></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td>:</td>
                  <td><input type="password" name="password" value="" /></td>
                </tr>
                <tr>
                  <td>Confirm Password</td>
                  <td>:</td>
                  <td><input type="password" name="conPass" /></td>
                </tr>
                <!--
                <tr>
                  <td>Usertype</td>
                  <td>:</td>
                  <td>
                    <input type="radio" name="usertype" value="admin"/> Admin
                    <input type="radio" name="usertype" value="employee"/> Employee
                    <input type="radio" name="usertype" value="customer"/> Customer
                  </td>
                </tr>
                -->
              </table>
              <hr />
              <table>
                <tr>
                  <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="Male" /> Male <input
                    type="radio" name="gender" value="Female" /> Female
                    <input type="radio" name="gender" value="Other" /> Other
                  </fieldset>
                </tr>
                <tr>
                  <fieldset>
                    <legend>Date of Birth</legend>
                    <input type="date" name="dob" value="" />
                  </fieldset>
                </tr>
              </table>
              <hr />
              <input type="submit" name="btn" id="Submit" />
              <input type="reset" name="rst" id="Reset" />
            </fieldset>
          </form>
        </td>
      </tr>

      <tr align="center">
        <td>
          <nav>
            <a href="t&c.html">Terms & Conditions</a> |
            <a href="privacyPolicy.html">Privacy Policy</a> |
            <a href="aboutUs.html">About Us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
    </table>
  </body>
</html>