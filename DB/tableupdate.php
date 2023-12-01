<?php

include("dbconn.php");

    $sql = "ALTER TABLE `users`
    ADD PRIMARY KEY (`id`)";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
