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
        header("Location:sendotp.php");
        exit();
    }else{
            $to_email = $email;
            $subject = "forget password";
            $body = "Hi, you otp is $otp";
            $headers = "From: shahid576ali@gmail.com";

            if (mail($to_email, $subject, $body, $headers)) {
                
                header("Location:otp.php");
                exit();
            } else {
                echo "error found check your internet connection";
               // header("Location:sendotp.php");
                exit();
            }

            
    }

?>