
<?php

    include("dbconn.php");

    $sql = "  ALTER TABLE `Matrix` ADD `goalset` INT(10) NOT NULL AFTER `ID`;
 
            
            ";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



