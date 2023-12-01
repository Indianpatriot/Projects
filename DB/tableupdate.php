<?php

include("dbconn.php");

    $sql = "ALTER TABLE `users`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
