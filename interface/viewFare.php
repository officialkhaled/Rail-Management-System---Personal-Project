<!-- Customer UI -->

<!-- HTML -->
<html>

<head>
    <title>View Fare</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<table
      border="2"
      align="center"
      width="1080px"
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
            <a href="cusHome.php">Home</a> |
            <a href="dashboard_cus.php">Dashboard</a> |
            <a href="deals&offers.php">Deals/Offers</a> |
            <a href="counters_cus.php">Counters</a> |
            <a href="feedback.php">Feedback</a> |
            <a href="logout.php">Logout</a>
          </nav>
        </td>
      </tr>
    <!-- Top Bars (end) -->
    
        <tr>
            <td style="padding: 80px">
                <form method="post" action="payTheFare.php" enctype="multipart/form-data">
                    <fieldset>
                        <legend>VIEW FARE</legend>
                        <table style="margin: 30px">
                            <tr style="margin: 10px">
                                <td><strong>Choose Class</strong></td>
                                <td><strong>Slots</strong></td>
                                <td><strong>Fare</strong></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="class" value="AC_S">AC_S</td>
                                <td>30</td>
                                <td>300/=</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="class" value="AC_B">AC_B</td>
                                <td>45</td>
                                <td>280/=</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="class" value="SNIGDHA">SNIGDHA</td>
                                <td>20</td>
                                <td>400/=</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="class" value="F_SEAT">F_SEAT</td>
                                <td>35</td>
                                <td>350/=</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="class" value="S_CHAIR">S_CHAIR</td>
                                <td>40</td>
                                <td>250/=</td>
                            </tr>
                        
                        </table>
                        <table style="margin: 30px">
                        <tr>
                            <td><input type="submit" name="next" value="Next"></td>
                        </tr>
                         
                        
    </table>
    </fieldset>
    </form>
    </td>
    </tr>

    <tr align="center">
        <td>
            <nav>
                <a href="t&c_log.php">Terms & Conditions</a> |
                <a href="privacyPolicy_log.php">Privacy Policy</a> |
                <a href="aboutUs_log.php">About Us</a>
            </nav>
            <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
    </tr>

    </table>

</body>

</html>