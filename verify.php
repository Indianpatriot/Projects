<!DOCTYPE html>
<html>
<head>
  <title>Login and Sign Up</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <?php session_start(); ?>
</head>
<body>
  <h1> <center>GOAL MANAGEMENT SYSTEM</center></h1>
  <div class="container">
    <div class="form-container" id="login-section">
      <h2>Enter your otp for email verification <?php echo $_SESSION["otp"]; ?></h2 >
      <span style="color:red"><?php if(isset($_SESSION["message"])){ echo $_SESSION["message"]; } unset($_SESSION["message"]); ?> </span>
      <form action="verifyb.php" method="post" id="login-form">
        <input type="otp" name="otp" placeholder="otp" required>
        <button type="submit">verify</button>
      </form>
    </div>
  </div>

</body>
</html>
