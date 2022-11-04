<!-- Customer UI -->

<!-- HTML -->
<html>
  <head>
    <title>Contact us</title>
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
        <td colspan="2">
          <img
            src="img/train-station.png"
            alt="Company Logo"
            width="70px"
            style="margin: 10px 20px"
          />
          <nav style="margin: 30px 20px; display: block; float: right">
            <a href="cusHome.php">Dashboard</a> |
            <a href="album.php">Album</a> |
            <a href="deals&offers.php">Deals/Offers</a> |
            <a href="contactUs.php">Contact Us</a> |
            <a href="logout.php">Logout</a>
          </nav>
        </td>
      </tr>

      <tr>
        <td style="padding: 80px">
            <form action="contactUsStore.php" method="post" enctype="multipart/form-data">
              <table align="center">
                <tr>
                  <td>
                    <h2>Your message has been sent! Thank you</h2>
                  </td>
                </tr>
              </table>
            </form>
        </td>
      </tr>

      <tr align="center" style="margin: 10px 0;">
        <td colspan="2">
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
