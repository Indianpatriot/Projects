<?php

$conn = new mysqli("localhost","root","","goal");
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
    $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
    $result = mysqli_query($conn ,$sql);
    $_SESSION['username'] = $username;
    header("Location:Untitled-1.php");
    exit();
}else{
    $sql = "SELECT * FROM `users` WHERE username = '$username' and password='$password'";
    $result = mysqli_query($conn ,$sql);
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
        $_SESSION['username'] = $username;
        header("Location:Untitled-1.php");
        exit();
    } else {
        $_SESSION["message"] = "Invalid Username or Password!";
        header("Location:login.php");
        exit();
        }
}




?>