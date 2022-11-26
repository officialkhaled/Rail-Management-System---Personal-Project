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
    
    include_once "../assets/headerTest.php";
    include_once "../assets/footerTest.php";
?>

<!-- HTML -->
<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/headStyle.css" />
    <link rel="stylesheet" href="../assets/footerStyle.css" />
  </head>
  <body>

    <table align="center"
      width="100%"
      style="margin: 20px">
      <tr>
        <td style="padding: 80px">
          <form action="../controllers/regCheck.php"  method="post" enctype="multipart/form-data">
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
                  <td><input type="password" name="password" value="" /></td>
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
              </table>
              <hr />
              <input type="submit" name="btn" id="Submit" />
              <input type="reset" name="rst" id="Reset" />
            </fieldset>
          </form>
        </td>
      </tr>
      <!--
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
      -->
    </table>
  </body>
</html>