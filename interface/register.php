<?php 

    if(isset($_POST['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_POST['err'] == 'null'){
            echo "null username/password";
        }
    }
?>


<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <table
      border="1"
      align="center"
      width="650px"
      style="border-collapse: collapse; margin-top: 20px"
    >
      <tr>
        <td>
          <img
            src="img/train-station.png"
            alt="Company Logo"
            width="70px"
            style="margin: 10px 20px"
          />
          <nav style="margin: 30px 20px; display: block; float: right">
            <a href="publicHome.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="register.php">Registration</a> |
            <a href="deals&offers.html">Deals/Offers</a> |
            <a href="contactUs.html">Contact Us</a>
          </nav>
        </td>
      </tr>

      <tr>
        <td style="padding: 80px">
          <form method="post" action="regCheck.php" enctype="">
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
              </table>
              <hr />
              <table>
                <tr>
                  <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="" /> Male <input
                    type="radio" name="gender" value= /> Female
                    <input type="radio" name="gender" value="" /> Other
                  </fieldset>
                </tr>
                <tr>
                  <fieldset>
                    <legend>Date of Birth</legend>
                    <input type="date" name="dob" />
                  </fieldset>
                </tr>
              </table>
              <hr />
              <input type="submit" name="btn" id="Submit" />
              <input type="reset" id="Reset" />
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
          <footer style="margin: 10px">Copyright &copy; 2017</footer>
        </td>
      </tr>
    </table>
  </body>
</html>