<?php

include("dbconn.php");

    $sql = "ALTER TABLE `lset plan`
    MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
