<?php
include("DB/dbconn.php");
    
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$email = $_SESSION["email"];
$otp = $_REQUEST["otp"];
$team_id = $_SESSION["select_team_id"];
if($_SESSION["otp"] == $otp){
    unset($_SESSION["otp"]);
    $sql1 = "INSERT INTO `users`(`username`, `email`, `password`, `role_id`) VALUES ('$username','$email','$password','4')";
    if(mysqli_query($conn ,$sql1)){
    }
    $sql2 = "SELECT * FROM `users` WHERE username = '$username' and password='$password'";
    $result1 = mysqli_query($conn ,$sql2);
    $id = mysqli_fetch_object($result1);
    $sql3 = "INSERT INTO `role_teams`(`user_id`, `role_id`, `team_id`) VALUES ('$id->id','4','$team_id')";
    $result = mysqli_query($conn,$sql3);
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $id->id;
    $_SESSION['role_id'] = '4';

    echo '<script type="text/javascript">';
    echo 'window.location.href="DB/access.php?team_id=<?=$team_id?>";';
    echo '</script>';

}else{
	$_SESSION["message"] = "incorrect otp";
    echo '<script type="text/javascript">';
    echo 'window.location.href="verify.php";';
    echo '</script>';
}


?>