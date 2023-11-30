<?php

include("dbconn.php");

    $sql = "drop table `goal_parameter`";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
