
<?php

    include("dbconn.php");

    $sql = "UPDATE `teams` SET `team_name` = 'Central team simtrak' WHERE `teams`.`id` = 1";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



