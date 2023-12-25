
<?php

    include("dbconn.php");

    $sql = "INSERT INTO `echo` (`ID`, `Member ID`, `Member Name`, `Date`, `LSeT Website`, `ADORE Website`, `Simtrak Website`, `ASCEND website`, `Weeho Portal`, `Foreword website`, `Goal Management System`, `Weeho App`, `Simtrak app`) VALUES
    (8, 0, 'hgjg', '0000-00-00', 'hgjg', 'hgjg', 'hgjg', 'hgjg', 'hgjg', 'hgjg', '', '', ''),
    (9, 0, '', '2023-09-25', '12', '12', '121', '21', '21', '21', '2', '12', '12')";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



