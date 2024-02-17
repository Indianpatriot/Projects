<?php
include("DB/dbconn.php");

$username = $_SESSION['user_id'];

// Fetch team goal
$teamID = $_SESSION["team_id"];
$sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
$teamname_result = mysqli_query($conn, $sql1);
$teamname_obj = mysqli_fetch_object($teamname_result);
$teamname = $teamname_obj->team_name;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $updategoal = "UPDATE `$teamname` SET `goalset`= '0' WHERE `ID` = '".$_POST["edit_goal_id"]."'";
        $updategoal = mysqli_query($conn,$updategoal);
        $updategoal = "UPDATE `$teamname` SET `Remark`= '".$_POST["feedback"]."' WHERE `ID` = '".$_POST["edit_goal_id"]."'";
        $updategoal = mysqli_query($conn,$updategoal);
        echo "ok"; // Send response to JavaScript
}
?>
