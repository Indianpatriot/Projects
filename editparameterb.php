<?php

include("DB/dbconn.php");

$teamID = $_SESSION["team_id"];
$sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
$teamname_result = mysqli_query($conn, $sql1);
$teamname = mysqli_fetch_object($teamname_result);

$goal_parameter = "SELECT * FROM `goal_parameter` WHERE team_id ='0' OR team_id ='$teamID' ORDER BY `goal_parameter`.`team_id` ASC ";
$parameter = mysqli_query($conn, $goal_parameter);
$i = 0;
while ($para = mysqli_fetch_object($parameter)) {
    $array[$i] = $para->parameter;
    $idarray[$i] = $para->parameter_id;
    $i++;
}

$val = 0;
if (isset($_POST[$val])) {
    foreach ($array as $value) {
        if ($value == "Date" || $value == "Member Name") {
            continue;
        } else {
            if ($value == $_POST[$val]) {
                continue;
            }
            $valchange = $_POST[$val];
            $sql45 = "UPDATE `goal_parameter` SET `parameter`= '$valchange' WHERE `parameter` = '$value' AND `team_id` = '$teamID'";
            $sql2 = "ALTER TABLE `$teamname->team_name` CHANGE `$value` `$_POST[$val]` VARCHAR(50) NOT NULL";
            if (mysqli_query($conn, $sql2)) {
                if (mysqli_query($conn, $sql45)) {
                }
            }
        }
        $val++;
    }
    echo "ok";
}

?>