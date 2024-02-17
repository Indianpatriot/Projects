
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `teams` CHANGE `team_co-ordinator` `team_coordinator` VARCHAR(50)";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



