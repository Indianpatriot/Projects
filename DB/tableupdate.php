<?php

include("dbconn.php");

    $sql = "ALTER TABLE `goal_parameter`
    MODIFY `parameter_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
