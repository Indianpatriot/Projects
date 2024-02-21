<!DOCTYPE html>
<html>

<head>
  <title>Login and Sign Up</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <?php session_start(); ?>
  <style>
    .password-container {
      position: relative;
    }

    #eye-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }
  </style>
</head>

<body>
  <h1>
    <center>GOAL MANAGEMENT SYSTEM</center>
  </h1>
  <div class="container">
    <div class="form-container" id="login-section">
      <h2>change password</h2>
      <span style="color:red">
        <?php if (isset($_SESSION["message"])) {
          echo $_SESSION["message"];
        }
        unset($_SESSION["message"]); ?>
      </span>
      <form action="changepassb.php" method="post" id="login-form">
        <input type="password" name="password" placeholder="password" required>
        <input type="password" name="cpassword" placeholder="confirm password" required>
        <button type="submit">send otp</button>
      </form>
    </div>
  </div>
</body>

</html>