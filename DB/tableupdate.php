
<?php

    include("dbconn.php");

    $sql = "INSERT INTO `central team simtrak` (`ID`, `Member ID`, `Member Name`, `Date`, `New tasks received`, `Tasks in progress`, `Continuous tasks`, `Tasks completed today`, `Article recieved`, `Cities initiated`, `Cities started`) VALUES
    (13, 0, '', '2023-09-25', 1, 2, 3, 4, NULL, NULL, NULL),
    (19, 21, 'mahati', '2023-10-11', 5, 4, 0, 3, 5, NULL, NULL)";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



