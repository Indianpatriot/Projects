<?php

include("dbconn.php");

    $sql = "DROP TABLE `city of joy`, `gd1`, `goal_parameter`, `lset plan` ,`record`,`role_teams`,
    `roles`,
    `teams`,
    `users`";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
