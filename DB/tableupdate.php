<?php

include("dbconn.php");

    $sql = "CREATE TABLE `city of joy` (
        `ID` int(10) NOT NULL,
        `Member ID` int(10) NOT NULL,
        `Member Name` varchar(50) NOT NULL,
        `Date` date NOT NULL,
        `leads` int(50) DEFAULT NULL,
        `Cities ongoing` varchar(50) DEFAULT NULL,
        `cities started` varchar(50) DEFAULT NULL,
        `Centres` varchar(50) DEFAULT NULL,
        `Sessions` varchar(50) DEFAULT NULL
      )";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
