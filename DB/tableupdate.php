<?php

include("dbconn.php");

    $sql = "DROP TABLE `echo`";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
