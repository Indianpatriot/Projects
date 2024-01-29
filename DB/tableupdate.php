
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `Ascend` CHANGE `ID` `ID` INT(10) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`ID`);";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



