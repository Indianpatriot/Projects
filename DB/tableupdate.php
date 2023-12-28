
<?php

    include("dbconn.php");

    $sql = "DELETE FROM goal_parameter WHERE `goal_parameter`.`parameter_id` = 64";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



