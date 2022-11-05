<!-- Employee UI -->
<html>
  <head>
    <title>Employee_Album</title>
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
            <a href="editAlbum.php">Album</a> |
            <a href="deals&offers_emp.php">Deals/Offers</a> |
            <a href="contactUs_log.php">Contact Us</a> |
            <a href="logout.php">Logout</a>
          </nav>
        </td>
      </tr>

      <!-- Change -->
      <tr>

        <td style="padding: 80px">
          <fieldset>

            <legend>Deals and Offers</legend>

            <h5>Already know what kind of train deal you're looking for but not sure what's on offer? Pick a type of deal below to see some of great savings you can make when booking BD train travel with us.</h5>

            <form action="" method="post" enctype="multipart/form-data">
              <table align="center">
                <tr>
                  <td align="center" colspan="2">
                    <nav style="margin: 15px 20px">
                      <button type="button" name="viewImage">Add images</button>
                      <button type="button" name="deleteImage">
                        Delete images
                      </button>
                    </nav>
                  </td>
                </tr>
                <tr>
                  <td>

                    <img
                      src="img/train1.jpg"
                      alt="img_1"
                      width="250px"
                    />
                    <p> 10% Discount on Turna Nishita Antonagar Train.</p>
                    <p> Valid till 20 November 2022.</p>


                  </td>
                  <td>
                    <img
                      src="img/train2.jpg"
                      alt="img_2"
                      width="250px"
                    />
                    <p>15% off Standard Class day Return tickets for 2 adults travelling together on weekends.</p>
                     <p> Valid till 25 November 2022.</p>

                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="img/train4.jpg" alt="img_3" width="250px" />
                     <p>Buy 5 full tickets and get 1 free</p>
                     <p> Valid till 27 November 2022.</p>
                  </td>
                  <td>
                    <img
                      src="img/train3.jpg"
                      alt="img_4"
                      width="250px"
                    />
                     <p>25% discount for students with their Student ID</p>
                     <p> Valid till 30 November 2022.</p>
                  </td>
                
                </tr>
              </table>
            </form>
          </fieldset>
        </td>
      </tr>
      <!-- Change -->
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
