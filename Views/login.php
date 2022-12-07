<!-- PHP -->
<?php

  session_start();
//  include_once "../assets/headerTest.php";
// include_once "../assets/footerTest.php";

?>

<!-- HTML -->
<html>
<head>

    <title>Login</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/styles.css" />

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

    </table>

    <script>
      
      // JavaScript Form Validation
      function validateForm() {
        let x = document.forms["myForm"]["username"].value;
        let y = document.forms["myForm"]["password"].value;
        
        if (x == "") {
          let msg = document.getElementsByClassName("msgUser")[0].innerHTML =
            "Please provide your username!";
          return false;
        } else if (y == "") {
          let msg = document.getElementsByClassName("msgPass")[0].innerHTML =
            "Please provide your password!";
          return false;
        } else if (x == "" && y == "") {
          let alertUser = document.getElementsByClassName("msgUser")[0].innerHTML =
            "Please provide your username!";
          let alertPass = document.getElementsByClassName("msgPass")[0].innerHTML =
            "Please provide your password!";
          return false;
        } else if (x == $user[$username] && y == $user[$password]) {
          alert("Login successful!");
          return true;
        } else {
          alert("Login failed!");
          return false;
        }
      }
      
    </script>

</body>
</html>