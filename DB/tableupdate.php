
<?php

    include("dbconn.php");

    $sql = "UPDATE `LSET` SET `goalset` = '1' WHERE `ID` = '4'";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



