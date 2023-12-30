<?php
include("DB/dbconn.php");

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$_SESSION["username"]=$_REQUEST['username'];
$_SESSION["password"]=$_REQUEST['password'];

if(isset($_REQUEST['email'])){
    $email = $_REQUEST['email'];
    $_SESSION["email"]=$_REQUEST['email'];
    $sql = "SELECT * FROM `users` WHERE username = '$username' ";
    $result = mysqli_query($conn ,$sql);
    $row  = mysqli_fetch_array($result);
    
    
    if(is_array($row)) {
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
        $body = "Hi, your OTP is $otp";
        $headers = "From: shahid576ali@gmail.com";

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
            $sql = "SELECT * FROM role_teams WHERE user_id = '".$row["id"]."'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $_SESSION['team_id'] = $row["team_id"];
            header("Location:index.php");
            exit();
        } else {
            $_SESSION["message"] = "Invalid Password!";
            $_SESSION['username'] = $_POST['username'];
            header("Location:login.php");
            exit();
        }
    } else {
        $_SESSION["message"] = "Invalid Username!";
        $_SESSION['username'] = $_POST['username'];
        header("Location:login.php");
        exit();
    }
    }
}
?>
