
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `lset plan` RENAME TO `LSet plan`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



