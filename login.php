<?php 
  include("DB/dbconn.php");
  $sql = "SELECT * FROM `teams`";
  $results = mysqli_query($conn ,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Sign Up</title>
  <link rel="icon" href="image/icon.png" type="image/png"/>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta http-equiv="Cache-control" content="no-cache">
  <style>  
    .form-container {
      width: 250px;
    }
    form input {
      width:90%;
    }
  </style>
</head>
<body>
  <h1 > <center>GOAL MANAGEMENT SYSTEM</center></h1>
  <div class="container">
    <div class="form-container" id="login-section">
      <h2>Login</h2>
      <span style="color:red"><?php if(isset($_SESSION["message"])){ echo $_SESSION["message"]; } unset($_SESSION["message"]); ?></span>
      <form action="loginb.php" method="post" id="login-form">
      <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" id="login-password" placeholder="Password" required>
        <label style="white-space: nowrap; display: inline-block; margin-right: 10px;">
      <input type="checkbox" style="display:inline; vertical-align: middle; width:10%;" onclick="showPassword('login-password')"> Show Password
        </label>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="#" id="signup-link">Sign Up</a></p>
        <p><a href="sendotp.php">Forgot password?</a></p>
      </form>
    </div>
    <div class="form-container hidden" id="signup-section">
      <h2>Sign Up</h2>
      <form action="loginb.php" method="post" id="signup-form">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <select name="team_id">
          <?php while($select = mysqli_fetch_object($results)){?>
            <option value="<?=$select->id?>"><?=$select->team_name?></option>
          <?php } ?>
        </select>
        <input type="password" name="password" id="signup-password" placeholder="Password" required>
        <label style="white-space: nowrap; display: inline-block; margin-right: 10px;">
        <input type="checkbox" style="display:inline; vertical-align: middle; width:10%;" onclick="showPassword('signup-password')"> Show Password
        </label>
        <button type="submit">Sign Up</button>
        <p>Already have an account? <a href="#" id="login-link">Login</a></p>
      </form>
    </div>
  </div>

  <script>
    function showPassword(passwordId) {
      var passwordField = document.getElementById(passwordId);
      passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
    }

    const loginSection = document.getElementById('login-section');
    const signupSection = document.getElementById('signup-section');
    const signupLink = document.getElementById('signup-link');
    const loginLink = document.getElementById('login-link');

    signupLink.addEventListener('click', () => {
      loginSection.classList.add('hidden');
      signupSection.classList.remove('hidden');
    });

    loginLink.addEventListener('click', () => {
      loginSection.classList.remove('hidden');
      signupSection.classList.add('hidden');
    });
  </script>
</body>
</html>