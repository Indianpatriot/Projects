
<?php

    include("dbconn.php");

    $sql = "DELETE FROM `LSET` WHERE `Date` BETWEEN '2023-06-01' AND '2023-10-31';";";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



