<?php
include("DB/dbconn.php");
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$_SESSION["email"] = $_REQUEST['email'];
$_SESSION["password"] = $_REQUEST['password'];

if (isset($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $_SESSION["username"] = $_REQUEST['username'];
    $_SESSION["select_team_id"] = $_REQUEST['team_id'];
    $sql = "SELECT * FROM `users` WHERE email = '$email' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);


    if (is_array($row)) {
        $_SESSION["message"] = "User already exists";
        echo '<script type="text/javascript">';
        echo 'window.location.href="login.php";';
        echo '</script>';
    } else {
        $otp = rand(1111, 9999);
        $_SESSION["email"] = $email;
        $_SESSION["otp"] = $otp;
        $to_email = $email;
        $subject = "Forget password";
        $body = "Hello $username,

        Greetings from Simtrak! Your verification code is $otp, valid for the next 5 minutes.
        Please keep it confidential and do not share it with anyone.
        
        Best regards,
        Simtrak Team";
        $headers = "From: contact@simtrak.in";

        if (mail($to_email, $subject, $body, $headers)) {
            echo '<script type="text/javascript">';
            echo 'window.location.href="verify.php";';
            echo '</script>';

        } else {
            echo "Error found, check your internet connection";
            exit();
        }
    }

} else {
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if (is_array($row)) {
        if ($row['password'] == $password) {
            $_SESSION['user_id'] = $row["id"];
            $_SESSION['role_id'] = $row["role_id"];
            $_SESSION['user_name'] = $row["username"];
            $sql = "SELECT * FROM role_teams WHERE user_id = '" . $row["id"] . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $_SESSION['team_id'] = $row["team_id"];
            echo '<script type="text/javascript">';
            echo 'window.location.href="index.php";';
            echo '</script>';

        } else {
            $_SESSION["message"] = "Invalid Password!";
            $_SESSION['email'] = $_POST['email'];
            echo '<script type="text/javascript">';
            echo 'window.location.href="login.php";';
            echo '</script>';
        }
    } else {
        $_SESSION["message"] = "Invalid email!";
        $_SESSION['email'] = $_POST['email'];
        echo '<script type="text/javascript">';
        echo 'window.location.href="login.php";';
        echo '</script>';
    }
}

?>