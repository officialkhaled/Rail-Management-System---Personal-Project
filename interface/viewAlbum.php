<!-- Customer // not used currently-->

<html>
  <head>
    <title>Album</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <table
    border="2"
      align="center"
      width="860px"
      style="border-collapse: collapse; margin-top: 30px; margin-bottom: 50px;"
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
            <a href="contactUs.php">Contact Us</a>
          </nav>
        </td>
      </tr>

      <tr>
        <td align="center">
          <nav style="margin: 15px 20px">
            <a href="dashboard.php">Dashboard</a> |
            <a href="viewAlbum.php">View Album</a> |
            <a href="editAlbum.php">Edit Album</a>
          </nav>
        </td>
      </tr>

      <tr>
        <td style="padding: 80px">
          <fieldset>
            <legend>PICTURES</legend>
            <form action="" method="post" enctype="multipart/form-data">
              <table align="center">
                <tr>
                  <td>
                    <img
                      src="img/album/seats_1.jpg"
                      alt="img_1"
                      width="250px"
                    />
                  </td>
                  <td>
                    <img
                      src="img/album/train_1.jpg"
                      alt="img_2"
                      width="250px"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="img/album/seat_2.png" alt="img_3" width="250px" />
                  </td>
                  <td>
                    <img
                      src="img/album/train_2.jpg"
                      alt="img_4"
                      width="250px"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/album/seats_3.jpg"
                      alt="img_5"
                      width="250px"
                    />
                  </td>
                  <td>
                    <img
                      src="img/album/train_3.jpg"
                      alt="img_6"
                      width="250px"
                    />
                  </td>
                </tr>
              </table>
            </form>
          </fieldset>
        </td>
      </tr>

      <tr align="center">
        <td colspan="2">
          <nav>
            <a href="t&c.html">Terms & Conditions</a> |
            <a href="privacyPolicy.html">Privacy Policy</a> |
            <a href="aboutUs.html">About Us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2017</footer>
        </td>
      </tr>
    </table>
  </body>
</html>
