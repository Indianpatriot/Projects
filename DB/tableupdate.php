
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `gd1` RENAME TO `GD1`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



