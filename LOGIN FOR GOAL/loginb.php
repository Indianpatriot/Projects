<?php
include("DB/dbconn.php");

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];


if(isset($_REQUEST['email'])){
    $email = $_REQUEST['email'];
    $sql = "SELECT * FROM `users` WHERE username = '$username' ";
    $result = mysqli_query($conn ,$sql);
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
        $_SESSION["message"] = "user all ready exist";
        header("Location:login.php");
        exit();
    } 


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
    header("Location:index.php");
    exit();
}else{
    $sql = "SELECT * FROM `users` WHERE username = '$username' and password='$password'";
    $result = mysqli_query($conn ,$sql);
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
        $_SESSION['user_id'] = $row["id"];
        $_SESSION['role_id'] = $row["role_id"];
        $_SESSION['user_name'] = $row["username"];
        $sql = "SELECT * FROM `role_teams` WHERE `user_id` = '".$row["id"]."'";
        $result = mysqli_query($conn ,$sql);
        $row  = mysqli_fetch_array($result);
        $_SESSION['team_id'] = $row["team_id"];
        header("Location:index.php");
        exit();
    } else {
        $_SESSION["message"] = "Invalid Username or Password!";
        header("Location:login.php");
        exit();
        }
}




?>