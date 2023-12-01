<?php

include("dbconn.php");

    $sql = "drop table `central team simtrak`";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
