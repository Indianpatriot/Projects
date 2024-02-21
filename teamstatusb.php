<?php
include("DB/dbconn.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teamastatus = "UPDATE `teams` SET `Status` = '" . $_REQUEST["team_activation"] . "' WHERE `teams`.`id` = '" . $_REQUEST["team_id"] . "'";
    if (mysqli_query($conn, $teamastatus)) {
        echo "ok";
    } else {
        echo "error";
    }
}


?>