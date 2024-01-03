
<?php

    include("dbconn.php");

    $sql = "UPDATE `teams` SET `Status` = 'Active' WHERE `teams`.`id` = 8`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



