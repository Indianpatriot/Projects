<?php
include("dbconn.php");

$managercheck = "SELECT * FROM `role_teams` where `team_id` = '1' AND `role_id` = '3'";
$managercheck = mysqli_query($conn,$managercheck);
$managercheck = mysqli_num_rows($managercheck);
echo $managercheck;
echo $conn->error;

?>