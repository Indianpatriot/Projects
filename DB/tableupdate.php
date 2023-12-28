
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `Central team simtrak` DROP `new parameter`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



