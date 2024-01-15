
<?php

    include("dbconn.php");

    $sql = "delete from `teams` WHERE `teams`.`id` <> 0";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



