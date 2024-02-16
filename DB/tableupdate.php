
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `teams` ADD `Target_achiv` VARCHAR(50) NULL AFTER `Target`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



