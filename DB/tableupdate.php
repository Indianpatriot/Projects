<?php

include("dbconn.php");

    $sql = "DROP TABLE `central team simtrak`";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
