<?php

include("dbconn.php");

    $sql = "CREATE TABLE `roles` (
        `id` int(11) NOT NULL,
        `role_name` varchar(50) NOT NULL
      )";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
