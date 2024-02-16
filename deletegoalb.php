<?php
include("DB/dbconn.php");
    $teamID = $_SESSION["team_id"];
    $sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
    $teamname_result = mysqli_query($conn, $sql1);
    $teamname = mysqli_fetch_object($teamname_result);

if(isset($_POST["delete_id"])){
    $deletegoal = "UPDATE `$teamname->team_name` SET `Remark` = '".$_POST["remark"]."' , `goalset` = '2' WHERE '".$_POST["delete_id"]."'";
    if(mysqli_query($conn,$deletegoal)){
        echo "ok";
    }
}





?>