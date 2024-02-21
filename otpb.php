<?php
session_start();
$otp = $_REQUEST["otp"];
if ($_SESSION["otp"] == $otp) {
    unset($_SESSION["otp"]);
    header("Location:changepass.php");
    exit();
} else {
    $_SESSION["message"] = "incorrect otp";
    header("Location:otp.php");
    exit();
}


?>