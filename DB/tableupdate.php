<?php

include("dbconn.php");

    $sql = "ALTER TABLE `simtrak recuitment`
    MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
