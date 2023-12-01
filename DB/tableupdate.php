<?php

include("dbconn.php");

    $sql = "CREATE TABLE `simtrak recuitment` (
        `ID` int(10) NOT NULL,
        `Member ID` int(10) NOT NULL,
        `Member Name` varchar(50) NOT NULL,
        `Date` date NOT NULL,
        `Leads` varchar(50) NOT NULL,
        `Domain` varchar(50) NOT NULL,
        `Int Sch` varchar(50) NOT NULL,
        `Int con.` varchar(50) NOT NULL,
        `Selected` varchar(50) NOT NULL,
        `Orientation` varchar(50) NOT NULL,
        `Joined` varchar(50) NOT NULL
      )";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
