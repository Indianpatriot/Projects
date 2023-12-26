
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `simtrak recuitment` RENAME TO `Simtrak Recuitment`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



