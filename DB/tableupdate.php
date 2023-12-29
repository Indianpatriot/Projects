
<?php

    include("dbconn.php");

    $sql = "DELETE FROM users WHERE `users`.`id` = 37";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



