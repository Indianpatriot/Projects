
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `LSET` DROP `Number of New Volunteer`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



