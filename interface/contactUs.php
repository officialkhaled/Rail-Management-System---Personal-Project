<!-- Customer UI -->

<!-- HTML -->
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <table
    border="2"
      align="center"
      width="860px"
      style="border-collapse: collapse; margin-top: 30px; margin-bottom: 50px;"
    >
    <!-- Top Bars (start) -->
    <tr>
      <td>
          <nav style="margin: 10px 10px; display: block; float: left">
            <!--<a href="contactUs_log.php">Contact Us</a>-->
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
      </tr>
    <!-- Top Bars (end) -->

      <tr>
        <td style="padding: 80px">
          <fieldset>
            <legend>CONTACT US</legend>
            <form action="contactUsStore.php" method="post" enctype="multipart/form-data">
              <table align="center">
                <tr>
                  <td colspan="2">
                    <h3 align="center">Thank you for reaching us!</h3>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name">Name</label><br><input type="text" name="name" required>
                  </td>
                  <td>
                  <label for="city">City</label><br><input type="text" name="city" required>
                  </td>
                </tr>
                <tr>
                  <td>
                  <label for="phoneNo">Phone no</label><br><input type="number" name="phoneNo" required>
                  </td>
                  <td>
                  <label for="email">Email</label><br><input type="email" name="email">
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    Message <br> <textarea name="message" rows="5" cols="50"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" name="btn" value="Submit">
                  </td>
                </tr>
              </table>
            </form>
          </fieldset>
        </td>
      </tr>

      <tr align="center" style="margin: 10px 0;">
        <td colspan="2">
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


<!-- PHP -->
<?php 

    if(isset($_POST['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "<h2> Invalid request error </h2>";
        }

        if($_POST['err'] == 'null'){
            echo "<h2> Empty Fields! </h2>";
        }
    }

?>