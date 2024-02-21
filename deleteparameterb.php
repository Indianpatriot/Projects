<?php
include("DB/dbconn.php");
$team_id = $_SESSION["team_id"];
$teamid = "SELECT * FROM `teams` where `id` ='$team_id'";
$teamid = mysqli_query($conn, $teamid);
$teamid = mysqli_fetch_object($teamid);
if (isset($_POST["parametername"])) {
    $parameterdeletename = "DELETE FROM `goal_parameter` WHERE `parameter` = '" . $_POST["parametername"] . "' AND `team_id` = '$team_id'";
    $parameterdeletetable = "ALTER TABLE `$teamid->team_name` DROP `" . $_POST["parametername"] . "`";
    if (mysqli_query($conn, $parameterdeletetable)) {
        if (mysqli_query($conn, $parameterdeletename)) {
            echo "ok";
        }
    }
}

?>