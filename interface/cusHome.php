<!-- PHP -->

<?php



?>

<!-- HTML -->

<html>
  <head>
    <title>Customer Home</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <form action="loginCheck.php" method="post" enctype="multipart/form-data">
    <table
      border="1"
      align="center"
      width="650px"
      style="border-collapse: collapse; margin-top: 20px"
    >
      <tr>
        <td>
          <img
            src="img/train-station.png"
            alt="Company Logo"
            width="70px"
            style="margin: 10px 20px"
          />
          <nav style="margin: 30px 20px; display: block; float: right">
            <a href="cusHome.php">Dashboard</a> |
            <a href="album.php">Albums</a> |
            <a href="deals&offers.php">Deals/Offers</a> |
            <a href="contactUs_log.php">Contact us</a> |
            <a href="logout.php">Logout</a>
          </nav>
        </td>
      </tr>

      <tr>
        <td style="padding-bottom: 100px">
          <h2 style="margin: 30px">Welcome Home!</h2>
          <p  style="margin: 30px">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br> <br> <br> 
          
        </p>
        </td>
      </tr>

      <tr align="center">
        <td>
          <nav>
            <a href="t&c_log.php">Terms & Conditions</a> |
            <a href="privacyPolicy_log.php">Privacy Policy</a> |
            <a href="aboutUs_log.php">About us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>
