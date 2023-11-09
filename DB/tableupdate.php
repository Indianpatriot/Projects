<?php

include("dbconn.php");

    $sql = "DROP TABLE `goal_parameter`";
    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
