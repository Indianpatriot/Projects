
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `teams` ADD `team_manager` VARCHAR(50) NULL AFTER `team_domain`, ADD `team_co-ordinator` VARCHAR(50) NULL AFTER `team_manager`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



