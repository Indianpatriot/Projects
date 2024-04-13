
<?php

    include("dbconn.php");

    $sql = "UPDATE `Vision` SET `goalset` = '0' WHERE `Member ID` = '69';";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



