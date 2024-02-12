<?php
include("DB/dbconn.php");
if(isset($_POST["before"])){
    $sql1="UPDATE `goal_parameter` SET `parameter`='".$_POST["after"]."' WHERE `parameter_id` = '".$_POST["before"]."' AND `team_id` = '".$_SESSION["team_id"]."'";
    $sql2="UPDATE `goal_parameter` SET `parameter`='".$_POST["before"]."' WHERE `parameter_id` = '".$_POST["after"]."' AND `team_id` = '".$_SESSION["team_id"]."'";
    if(mysqli_query($conn,$sql2)){
        if(mysqli_query($conn,$sql1)){
            echo "ok";
        }
    }
}


?>