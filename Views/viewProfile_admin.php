<!-- Customer UI -->

<html>
  <head>
    <title>Customer - Edit Profile</title>
    <link rel="stylesheet" href="../assets/style.css">

  </head>
  <body>
    <table
    border="2"
      align="center"
      width="1080px"
      style="border-collapse: collapse; margin-top: 30px; margin-bottom: 50px;"
    >
    <tr>
      <td colspan="2">
          <nav style="margin: 10px 10px; display: block; float: left">
            <h1>Train Station System</h1>
            <h5>A Complete Application for Railway Train System</h5>
          </nav>
          <img
            src="../assets/img/train-station.png"
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
            <a href="viewApplicants.php">Applicants</a> |
            <a href="../controllers/logout.php">Logout</a>
          </nav>
        </td>
      </tr> 
    <!-- Top Bars (end) -->

      <tr>
        <td style="padding-bottom: 100px">
          <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px">
          View Profile
          </h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
          <li><a href="viewProfile_admin.php">View Profile</a></li>
            <li><a href="editProfile_admin.php">Edit Profile</a></li>
            <li><a href="profilePicture_admin.php">Change Profile Picture</a></li>
            <li><a href="changePass_admin.php">Change Password</a></li>
            <li><a href="viewStation.php">View Station</a></li>
            <li><a href="editStation.php">Edit Station</a></li>
            <li><a href="../controllers/reviewFeedback.php">Review Feedback</a></li>
            <li><a href="viewApplicants.php">View Applicants</a></li>
          </ul>
        </td>
        <td style="padding: 80px">
        <fieldset>
        <legend>PROFILE</legend>
        <form action="../controllers/regCheck.php" method="post" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td>Name </td>
                    <td> : </td>
                    <td> Khaled Hossain</td>
                    <td rowspan="5"><img src="../assets/img/profile-user.png" alt="profile picture" width="70px" height="70px"><a href="profilePicture.php"><br>Change</a></td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td> : </td>
                    <td> khaled@aiub.edu</td>
                </tr>
                <tr>
                    <td>Gender </td>
                    <td> : </td>
                    <td> Male</td>
                </tr>
                <tr>
                    <td>Date of Birth </td>
                    <td> : </td>
                    <td> 2020-07-02</td>
                </tr>
                <tr>
                    <td><a href="editProfile.php">Edit Profile</a></td>
                </tr>
            </table>
        </form>
    </fieldset>
  </td>
      </tr>

      <tr align="center">
        <td colspan="2">
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
