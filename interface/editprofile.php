<html>
  <head>
    <title>Edit Profile</title>
  </head>
  <body>
    <table
      border="1"
      align="center"
      width="650px"
      style="border-collapse: collapse; margin-top: 20px"
    >
      <tr>
        <td colspan="2"><img src="img/Screenshot_2022_02_16_at_9_30_14_am_copy.jpg" alt="Profile Picture" style="width: 80px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logged in as <a href="profile.html"> User </a> | <a href="logout.html">Logout</a></td>
      </tr>

      <tr>
        <td style="padding-bottom: 100px">
        <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px;">Account</h4><hr style="margin: 0 10px;">
        <ul style="margin-left: 20px; margin-top:20px;">
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="viewProfile.html">View Profile</a></li>
            <li><a href="editProfile.html>Edit Profile</a></li>
            <li><a href="changepfp.html">Change Profile Picture</a></li>
            <li><a href="changePass.html">Change Password</a></li>
            <li><a href="logout.html">Logout</a></li>
        </ul>
    </td>

    <td style="padding-bottom: 100px">
    <fieldset>
        <legend>EDIT PROFILE</legend>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <input type="radio">Male 
                        <input type="radio">Female 
                        <input type="radio">Other 
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>:</td>
                    <td><input type="date" name="date"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btn" value="Submit"></td>
                </tr>
            </table>
        </form>
    </fieldset></td>
      </tr>

      <tr align="center">
        <td colspan="2">
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>

    </table>

  </body>
</html>
