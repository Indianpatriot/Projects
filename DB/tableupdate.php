<?php

include("dbconn.php");

    $sql = "CREATE TABLE `teams` (
        `id` int(11) NOT NULL,
        `team_name` varchar(50) NOT NULL,
        `team_domain` varchar(50) NOT NULL,
        `Status` varchar(50) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
