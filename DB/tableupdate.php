
<?php

    include("dbconn.php");

    $sql = "INSERT INTO `city of joy` (`ID`, `Member ID`, `Member Name`, `Date`, `leads`, `Cities ongoing`, `cities started`, `Centres`, `Sessions`) VALUES
    (1, 31, 'Tanishaa Gupta', '0000-00-00', 454, '455', '22', '44', '55'),
    (2, 35, 'Bono Jyoshna Biswal', '0000-00-00', 33, '66', 'HHKS', '77', '22')";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



