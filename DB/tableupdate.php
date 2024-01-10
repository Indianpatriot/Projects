
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `teams` ADD `Target` VARCHAR(50) NOT NULL AFTER `team_domain`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



