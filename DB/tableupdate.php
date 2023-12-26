
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `central team simtrak` RENAME TO `Central team simtrak`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



