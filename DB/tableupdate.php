<?php

include("dbconn.php");

    $sql = "CREATE TABLE `users` (
        `id` int(10) NOT NULL,
        `username` varchar(50) DEFAULT NULL,
        `email` varchar(50) DEFAULT NULL,
        `password` varchar(20) DEFAULT NULL,
        `role_id` int(10) NOT NULL
      )";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
