
<?php

    include("dbconn.php");

    $sql = "DELETE FROM `goal_parameter` WHERE `parameter_id` = '88'";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



