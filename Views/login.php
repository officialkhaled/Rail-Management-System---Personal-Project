<!-- PHP -->
<?php

  include_once "../assets/header.php";

?>

<!-- HTML -->
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style.css" />
</head>

<body>
  <!--
    <table border="2"
      align="center"
      width="1080px"
      style="border-collapse: collapse; margin-top: 30px; margin-bottom: 50px;">

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
                <form action="../controllers/loginCheck.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>
                            <tr>
                                <td>Username </td>
                                <td>:</td>
                                <td><input type="text" name="username" value="" ></td>
                            </tr>
                            <tr>
                                <td>Password </td>
                                <td>:</td>
                                <td><input type="password" name="password" value="" ></td>
                            </tr>
                            <tr>
                              <td colspan="3">
                                <input type="radio" name="usertype" value="admin"/> Admin
                                <input type="radio" name="usertype" value="employee"/> Employee
                                <input type="radio" name="usertype" value="customer"/> Customer
                              </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <tr><input type="checkbox">Remember Me</tr>
                            <tr><br><br></tr>
                            <tr>
                              <td><a href="forgotPass.php">Forgot Password?</a></td>
                                <td>
                                <td><input type="submit" name="btn" value="Submit"></td>
                            </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
              </td>
          </tr>

    <tr align="center">
        <td>
            <nav>
                <a href="t&c.php">Terms & Conditions</a> |
                <a href="privacyPolicy.php">Privacy Policy</a> |
                <a href="aboutUs.php">About Us</a>
            </nav>
            <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
    </tr>
    </table>
</body>

</html>