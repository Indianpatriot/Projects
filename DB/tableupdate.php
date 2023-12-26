
<?php

    include("dbconn.php");

    $sql = "UPDATE `goal_parameter` SET `parameter` = 'Article recieved' WHERE `goal_parameter`.`parameter_id` = 58";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



