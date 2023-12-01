<?php

include("dbconn.php");

    $sql = "CREATE TABLE `echo` (
        `ID` int(10) NOT NULL,
        `Member ID` int(10) NOT NULL,
        `Member Name` varchar(50) NOT NULL,
        `Date` DATE NOT NULL DEFAULT CURRENT_DATE,
        `LSeT Website` varchar(50) NOT NULL,
        `ADORE Website` varchar(50) NOT NULL,
        `Simtrak Website` varchar(50) NOT NULL,
        `ASCEND website` varchar(50) NOT NULL,
        `Weeho Portal` varchar(50) NOT NULL,
        `Foreword website` varchar(50) NOT NULL,
        `Goal Management System` varchar(50) NOT NULL,
        `Weeho App` varchar(50) NOT NULL,
        `Simtrak app` varchar(50) NOT NULL,
        PRIMARY KEY (`ID`)
    );
    ";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
