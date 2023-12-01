<?php

include("dbconn.php");

    $sql = "ALTER TABLE `goal_parameter`
    ADD PRIMARY KEY (`parameter_id`)
    ";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
