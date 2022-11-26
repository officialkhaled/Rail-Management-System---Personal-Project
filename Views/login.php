<!-- PHP -->
<?php

  session_start();
  include_once "../assets/headerTest.php";
  include_once "../assets/footerTest.php";

?>

<!-- HTML -->
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/headStyle.css" />
    <link rel="stylesheet" href="../assets/footerStyle.css" />
</head>

<body>
    <table
      align="center"
      width="100%"
      style="margin: 20px;">
        <tr>
            <td style="padding: 80px">
                <form action="../controllers/loginCheck.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>
                            <tr>
                                <td>Username </td>
                                <td>:</td>
                                <td><input type="text" name="username" value=""></td>
                            </tr>
                            <tr>
                                <td>Password </td>
                                <td>:</td>
                                <td><input type="password" name="password" value=""></td>
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
                            <tr><input type="checkbox" name="checkbox">Remember Me</tr>
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