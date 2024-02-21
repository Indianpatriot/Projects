<?php
include("DB/dbconn.php");
if (isset($_POST["team_domain"])) {
    $teamedit = "UPDATE `teams` SET `team_name` = '" . $_POST["team_name"] . "', `team_domain` = '" . $_POST["team_domain"] . "' WHERE `teams`.`id` = '" . $_POST["team_id"] . "'";
    $changeteamname = "RENAME TABLE `" . $_POST["team_old"] . "` TO `" . $_POST["team_name"] . "`";
    if (mysqli_query($conn, $teamedit)) {
        if ($_POST["team_old"] == $_POST["team_name"]) {
            echo "ok";
        } else {
            if (mysqli_query($conn, $changeteamname)) {
                echo "ok";
            } else {
                echo $conn->error;
            }
        }
    } else {
        echo $conn->error;
    }
}


?>