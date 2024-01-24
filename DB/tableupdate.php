
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `Ascend` ADD `Number of New Volunteers` INT NOT NULL AFTER `Member Name`;";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



