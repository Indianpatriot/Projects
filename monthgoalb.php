<?php
include("DB/dbconn.php");

session_start(); // Start the session to access session variables
$username = $_SESSION['user_id'];

// Fetch team goal
$teamID = $_SESSION["team_id"];
$sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
$teamname_result = mysqli_query($conn, $sql1);
$teamname_obj = mysqli_fetch_object($teamname_result);
$teamname = $teamname_obj->team_name;

$goal_parameter = "SELECT * FROM `goal_parameter` WHERE team_id ='0' OR team_id = '$teamID' ORDER BY `goal_parameter`.`team_id` ASC ";
$parameter_result = mysqli_query($conn, $goal_parameter);

$parameters = array();
$goalparameters = array();
$array = array();
$i = 0;

while ($para = mysqli_fetch_object($parameter_result)) {
    $parameters[] = $para;
    $array[$i] = $para->parameter;
    $i++;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $team_manager_id = $_POST["team_manager_id"];
    $team_manager_name = $_POST["team_manager_name"];

    $updategoal = "UPDATE `$teamname` SET `Member ID` = '$team_manager_id', `Member Name`= '$team_manager_name' WHERE `goalset` = '1'";

    if (mysqli_query($conn, $updategoal)) {
        $i = 0;
        foreach ($array as $value) {
            if ($value == 'Member Name') {
                continue;
            }
            $parameter_value = $_POST[$i];
            $updategoal = "UPDATE `$teamname` SET `$value`= '$parameter_value' WHERE `goalset` = '1'";
            if (!mysqli_query($conn, $updategoal)) {
                echo $conn->error;
            }
            $i++;
        }
        echo "ok"; // Send response to JavaScript
    } else {
        echo "error"; // Send response to JavaScript
    }
}
?>
