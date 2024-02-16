
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `Matrix` ADD `Remark` VARCHAR(100) NOT NULL AFTER `goalset`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



