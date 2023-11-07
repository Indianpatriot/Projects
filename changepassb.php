<?php
include("DB/dbconn.php");
$password=$_REQUEST['password'];
$confirm_password=$_REQUEST['cpassword'];
$email=$_SESSION['email'];
if($password == $confirm_password){
    $sql="UPDATE `users` SET `password`='$password' WHERE email='$email'";
    if (mysqli_query($conn, $sql)) {
        
        $result = mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email' and `password`= '$password'");
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
         $message = "Invalid Username or Password!";
         echo "dd";
        }        
}
}
?>