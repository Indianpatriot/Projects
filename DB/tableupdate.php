<?php

include("dbconn.php");

    $sql = "CREATE TABLE `gd1` (
        `ID` int(10) NOT NULL,
        `Member ID` int(10) NOT NULL,
        `Member Name` varchar(50) NOT NULL,
        `Date` int(10) NOT NULL,
        `ADORE` varchar(50) NOT NULL,
        `Foreword` varchar(50) NOT NULL,
        `Sawec` varchar(50) NOT NULL,
        `Others` varchar(50) NOT NULL
      )";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
