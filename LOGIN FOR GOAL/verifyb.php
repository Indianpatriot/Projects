<?php
include("DB/dbconn.php");
    
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$email = $_SESSION["email"];
$otp = $_REQUEST["otp"];
if($_SESSION["otp"] == $otp){
    unset($_SESSION["otp"]);
    $sql1 = "INSERT INTO `users`(`username`, `email`, `password`, `role_id`) VALUES ('$username','$email','$password','5')";
    if(mysqli_query($conn ,$sql1)){
    echo "ddd";
    }
    $sql2 = "SELECT * FROM `users` WHERE username = '$username' and password='$password'";
    $result1 = mysqli_query($conn ,$sql2);
    $id = mysqli_fetch_object($result1);
    $sql3 = "INSERT INTO `role_teams`(`user_id`, `role_id`, `team_id`) VALUES ('$id->id','5','0')";
    $result = mysqli_query($conn,$sql3);
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $id->id;
    $_SESSION['role_id'] = '5';

    header("Location:index.php");
    exit();

}else{
	$_SESSION["message"] = "incorrect otp";
    header("Location:verifyb.php");
    exit();
}


?>