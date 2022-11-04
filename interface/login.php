<!-- PHP -->
<?php

    if (isset($_POST['err'])) {
        if ($_POST['err'] == 'invalid_request') {
            echo "<h2> Invalid request error! </h2>";
        }

        if ($_POST['err'] == 'null') {
            echo "<h2> Username/Password is missing! </h2>";
        }
}

?>

<!-- HTML -->
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <table border="1" align="center" width="650px" style="border-collapse: collapse; margin-top: 20px; ">
        <tr>
            <td>
                <img src="img/train-station.png" alt="Company Logo" width="70px" style="margin: 10px 20px" />
                <nav style="margin: 30px 20px; display: block; float: right">
                    <a href="publicHome.php" class="" >Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="register.php">Registration</a> |
                    <a href="deals&offers.php">Deals/Offers</a> |
                    <a href="contactUs.php">Contact Us</a>
                </nav>
            </td>
        </tr>

        <tr>
            <td style="padding: 80px">
                <form action="loginCheck.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>
                            <tr>
                                <td>Username </td>
                                <td>:</td>
                                <td><input type="text" name="username" value="" required></td>
                            </tr>
                            <tr>
                                <td>Password </td>
                                <td>:</td>
                                <td><input type="password" name="password" value="" required></td>
                        </table>
                        <hr>
                        <table>
                            <tr><input type="checkbox">Remember Me</tr>
                            <tr><br><br></tr>
                            <tr>
                                <td>
                                <td><input type="submit" name="btn" value="Submit"></td>
            </td>
            <td><a href="forgotPass.php">Forgot Password?</a></td>
        </tr>
    </table>
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