<!DOCTYPE html>
<html>

<head>
  <title>Login and Sign Up</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <?php session_start(); ?>
</head>

<body>
  <h1>
    <center>GOAL MANAGEMENT SYSTEM</center>
  </h1>
  <div class="container">
    <div class="form-container" id="login-section">
      <h2>Enter you registered email</h2>
      <span style="color:red">
        <?php if (isset($_SESSION["message"])) {
          echo $_SESSION["message"];
        }
        unset($_SESSION["message"]); ?>
      </span>
      <form action="sendotpb.php" method="post" id="login-form">
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">send otp</button>
      </form>
    </div>
  </div>

</body>

</html>