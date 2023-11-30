<?php

include("dbconn.php");

    $sql = "DELETE FROM `goal_parameter` WHERE parameter_id = '10'";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
