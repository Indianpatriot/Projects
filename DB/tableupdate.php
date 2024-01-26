
<?php

    include("dbconn.php");

    $sql = "DELETE FROM `LSET` WHERE `parameter_id` IN ('85','86','87')";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



