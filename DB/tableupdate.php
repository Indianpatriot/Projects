
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `LSET` ADD `Institutes` VARCHAR(50) NOT NULL";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



