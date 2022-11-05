<html>
  <head>
    <title>View Station</title>
    <link rel="stylesheet" href="style.css">
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
      <td colspan="2">
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
        <td colspan="2">
          <nav style="margin: 30px 20px; display: block; float: right">
            <a href="adminHome.php">Home</a> |
            <a href="dashboard_admin.php">Dashboard</a> |
            <a href="viewStation.php">Station</a> |
            <a href="logout.php">Logout</a>
          </nav>
        </td>
      </tr>
    <!-- Top Bars (end) -->

      <tr>
        <td style="padding-bottom: 100px; ">
          <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px">
          View Station
          </h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
            <li><a href="viewStation.php">View Station</a></li>
            <li><a href="editStation.php">Edit Station</a></li>
            <li><a href="reviewFeedback.php">Review Feedback</a></li>
            <li><a href="viewApplicants.php">View Applicants</a></li>
          </ul>
        </td>
        <td style="padding: 80px">
          <fieldset>
            <legend>VIEW STATIONS</legend>
              <table>
              <tr>
                <nav style="margin: 20px;">
                    <td><strong>City</strong></td>
                    <td><strong>Address</strong></td>
                    <td><strong>Contact</strong></td>
                </nav>
              </tr>
              <tr>
                <nav>
                    <td>Dhaka</td>
                    <td>Airport Railway Station</td>
                    <td>+880 17526 978456</td>
                </nav>
              </tr>
              <tr>
                <nav>
                    <td>Chittagong</td>
                    <td>Pahartali Railway Station</td>
                    <td>+880 15348 987564</td>
                </nav>
              </tr>
              <tr>
                <nav>
                    <td>Noakhali</td>
                    <td>Sonaimuri Railway Station</td>
                    <td>+880 19576 485342</td>
                </nav>
              </tr>
              </table>
          </fieldset>
        </td>
      </tr>

      <tr align="center">
        <td colspan="2">
          <nav>
            <a href="t&c_admin.php">Terms & Conditions</a> |
            <a href="privacyPolicy_admin.php">Privacy Policy</a> |
            <a href="aboutUs_admin.php">About Us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
    </table>
  </body>
</html>
