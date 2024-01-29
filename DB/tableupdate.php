
<?php

    include("dbconn.php");

    $sql = "INSERT INTO `LSET` (`ID`, `Member ID`, `Member Name`, `Date`, `New tasks received`, `Tasks in progress asaadasadaasdasdasda`, `Continuous tasks`, `Tasks completed today`, `Article recieved`, `Cities initiated`, `Cities started`, `goalset`) VALUES (NULL, '', '', current_timestamp(), '', '', '', '', '', NULL, '', '1')";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



