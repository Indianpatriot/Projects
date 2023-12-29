<?php
    include("DB/dbconn.php");
    $email = $_REQUEST["email"];
    $otp = rand(1111,9999);
    $result = mysqli_query($conn,"SELECT * FROM `users` WHERE email='$email'");
    $count = mysqli_num_rows($result);
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
            $body = "Hi, you otp is $otp";
            $headers = "From: shahid576ali@gmail.com";

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