
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `Ascend` ADD `goalset` INT(10) NOT NULL AFTER `ID`;
            ALTER TABLE `Glowball` ADD `goalset` INT(10) NOT NULL AFTER `ID`;
            ALTER TABLE `Lset Institution Development` ADD `goalset` INT(10) NOT NULL AFTER `ID`;
            ALTER TABLE `Matrix` ADD `goalset` INT(10) NOT NULL AFTER `ID`;
            ALTER TABLE `Weeho` ADD `goalset` INT(10) NOT NULL AFTER `ID`;
            ";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



