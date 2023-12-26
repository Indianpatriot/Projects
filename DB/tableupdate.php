
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `city of joy` RENAME TO `City of joy`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



