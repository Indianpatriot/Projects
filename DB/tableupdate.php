
<?php

    include("dbconn.php");

    $sql = "UPDATE `goal_parameter` SET `parameter`='Date' WHERE `parameter` = '3'";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



