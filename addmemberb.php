<?php
include("DB/dbconn.php");
    // add normal member
$normalmember = "SELECT * FROM `users` WHERE `role_id` IN (3, 5) ORDER BY id ASC";
$normaladdmember = mysqli_query($conn,$normalmember);
$teamID = $_SESSION["team_id"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Assuming $conn is your database connection

    // Retrieve data from POST
    $id = $_POST["membername"];
    $role_id = $_POST["membertype"];

    // Assuming $teamID is defined somewhere in your code

    $sql35 = "SELECT * FROM `users` WHERE `id` = '$id'";
    $result35 = mysqli_query($conn, $sql35);
    $row = mysqli_fetch_object($result35);
            $managercheck = "SELECT * FROM `role_team` where `tema_id` = '$teamID' AND `role_id` = '$role_id'";
            $managercheck = mysqli_num_rows($managercheck);
            if($managercheck >=1){
                echo "ok";
            }else{
                $sql2 = "INSERT INTO `role_teams` (`role_id`, `team_id`, `user_id`) VALUES ('$role_id', '$teamID', '$id')";
                if(mysqli_query($conn, $sql2)){
                    echo "ok";
                } 
            }
    
}


?>