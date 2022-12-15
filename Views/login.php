
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="../assets/style/style.css">

  <style>
    .err-text{
      color: tomato;
      font-size: 16px;
    }

    #showhidepwd{
      font-size: 18px;
      margin-right: 8px;
    }

    #usertype:hover {
      background-color: var(--clr-accent);
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
   
  <div class="form-container">

    <form action="../controllers/loginCheck.php" method="post" id="login-form" onsubmit="return validateLoginForm()" onkeyup="validateRegistrationForm()" enctype="multipart/form-data" onclick="">
      <h3>Login</h3>

      <input type="username" id="username" name="username" placeholder="Enter your username" class="text-field">
      <span id="unameMsg" class="err-text"></span>
      
      <input type="password" id="password" name="password" placeholder="Enter your password" class="text-field">
      <span id="passMsg" class="err-text"></span>

      <div id="showPass-card">
        <input type="checkbox" id="showPass" onchange="return SHPassword(this)" value="Show Password"><span id="showhidepwd">Show Password</span>
      </div>

      <select name="usertype" id="usertype">
         <option value="customer">Customer</option>
         <option value="admin">Admin</option>
      </select>

      <input type="submit" name="submit" value="LOGIN" class="form-btn">
      <p>Don't have an account? <a id="link-color" href="register.php">Register now</a></p>
    </form>

  </div>

  <script src="../assets/js/formValidate.js"></script>

</body>
</html>