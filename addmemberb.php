<?php
include("DB/dbconn.php");
    // add normal member
$normalmember = "SELECT * FROM `users` WHERE `role_id` IN (3, 5) ORDER BY id ASC";
$normaladdmember = mysqli_query($conn,$normalmember);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Assuming $conn is your database connection

    // Retrieve data from POST
    $id = $_POST["membername"];
    $role_id = $_POST["membertype"];

    // Assuming $teamID is defined somewhere in your code

    $sql35 = "SELECT * FROM `users` WHERE `id` = '$id'";
    $result35 = mysqli_query($conn, $sql35);
    $row = mysqli_fetch_object($result35);

    if($row->role_id == 3){
        if($role_id == 3){
            $sql2 = "INSERT INTO `role_teams` (`role_id`, `team_id`, `user_id`) VALUES ('$role_id', '$teamID', '$id')";
            if(mysqli_query($conn, $sql2)){
                echo "ok";
            }
        }else{
            $_SESSION["team_manager"] = "$row->username is a team manager, can't be a member.";
            echo "ok";
        }
    }else{
        $sql1 = "UPDATE `users` SET `role_id`='$role_id' WHERE `id` = '$id' ";
        $sql2 = "INSERT INTO `role_teams` (`role_id`, `team_id`, `user_id`) VALUES ('$role_id', '$teamID', '$id')";
        if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)){
            echo "ok";
        }
    }
}


?>