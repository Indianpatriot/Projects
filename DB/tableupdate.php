<?php

include("dbconn.php");

    $sql = "CREATE TABLE `central team simtrak` (
        `ID` int(10) NOT NULL,
        `Member ID` int(10) NOT NULL,
        `Member Name` varchar(50) NOT NULL,
        `Date` date NOT NULL DEFAULT current_timestamp(),
        `New tasks received` int(10) NOT NULL,
        `Tasks in progress` int(10) NOT NULL,
        `Continuous tasks` int(10) NOT NULL,
        `Tasks completed today` int(10) NOT NULL,
        `Article recieved` int(50) DEFAULT NULL,
        `Cities initiated` varchar(50) DEFAULT NULL,
        `Cities started` varchar(50) DEFAULT NULL,
        primary key (ID)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
      ";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
