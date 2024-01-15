<?php
    include("DB/dbconn.php");
    $email = $_REQUEST["email"];
    $otp = rand(1111,9999);
    $result = mysqli_query($conn,"SELECT * FROM `users` WHERE email='$email'");
    $count = mysqli_num_rows($result);
    $username = mysqli_fetch_object($result);
    $_SESSION["email"]=$email;
    $_SESSION["otp"] = $otp; 
    if($count ==0){    
        $_SESSION["message"]= "invalid email";
        echo '<script type="text/javascript">';
        echo 'window.location.href="sendotp.php";';
        echo '</script>';
    }else{
            $to_email = $email;
            $subject = "forget password";
            $body = "Hello $username->username,

            Greetings from Simtrak! Your password reset OTP is $otp, valid for the next 5 minutes.
            Keep it secure and refrain from sharing it with others.
            
            Best regards,
            Simtrak Team";
            $headers = "From: contact@simtrak.in";

            if (mail($to_email, $subject, $body, $headers)) {
                echo '<script type="text/javascript">';
                echo 'window.location.href="otp.php";';
                echo '</script>';
            } else {
                echo "error found check your internet connection";
               // header("Location:sendotp.php");
                exit();
            }

            
    }

?>