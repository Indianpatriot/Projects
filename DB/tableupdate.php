<?php

include("dbconn.php");

    $sql = "CREATE TABLE `role_teams` (
        `user_id` int(10) NOT NULL,
        `role_id` int(11) DEFAULT NULL,
        `team_id` int(11) DEFAULT NULL
      )";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
