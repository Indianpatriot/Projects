
<?php

    include("dbconn.php");

    $sql = "UPDATE `users` SET `role_id` = '1' WHERE `users`.`id` = 49";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



