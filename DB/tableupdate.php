<?php

include("dbconn.php");

    $sql = "CREATE TABLE `lset plan` (
        `ID` int(10) NOT NULL,
        `Member ID` int(10) NOT NULL,
        `Member Name` varchar(50) NOT NULL,
        `Date` int(10) NOT NULL,
        `Leads` int(10) NOT NULL,
        `Non lset form filled` int(10) NOT NULL,
        `Forms filled` int(10) NOT NULL,
        `Screening` int(10) NOT NULL,
        `Final Int` int(10) NOT NULL,
        `Selected` int(10) NOT NULL,
        `Joining` int(10) NOT NULL
      )";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
