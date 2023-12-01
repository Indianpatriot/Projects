<?php

include("dbconn.php");

    $sql = "ALTER TABLE `city of joy`
    ADD PRIMARY KEY (`ID`);
    ";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
