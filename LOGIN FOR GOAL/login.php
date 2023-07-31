<!DOCTYPE html>
<html>
<head>
  <title>Login and Sign Up</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <?php session_start(); ?>
</head>
<body>
  <h1> <center>GOAL MANAGAMENT SYSTEM</center></h1>
  <div class="container">
    <div class="form-container" id="login-section">
      <h2>Login</h2 >
      <span style="color:red"><?php if(isset($_SESSION["message"])){ echo $_SESSION["message"]; } unset($_SESSION["message"]); ?> </span>
      <form action="loginb.php" method="post" id="login-form">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="#" id="signup-link">Sign Up</a></p>
      </form>
    </div>
    <div class="form-container hidden" id="signup-section">
      <h2>Sign Up</h2>
      <form action="loginb.php" method="post" id="signup-form">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Sign Up</button>
        <p>Already have an account? <a href="#" id="login-link">Login</a></p>
      </form>
    </div>
  </div>

  <script >
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