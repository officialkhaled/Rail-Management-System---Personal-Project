<html>
  <head>
    <title>Profile Picture</title>
  </head>
  <body>
    <table
    border="2"
      align="center"
      width="860px"
      style="border-collapse: collapse; margin-top: 30px; margin-bottom: 50px;"
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
        <legend>Profile Picture</legend>
        <form action="" method="post">
    <table align="center">
        <img src="img/64572.png" alt="Profile Picture"    
        width="170" 
        height="170">
        <br>
        <br>
        <form action="/profilepicture.html">
            <input type="file" id="myFile" name="filename">
            <br>
            <hr>
            <input type="submit">
          </form>


           
    </table>

  </body>
</html>
