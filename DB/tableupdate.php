
<?php

    include("dbconn.php");

    $sql = "delete `users` WHERE `users`.`role_id` <> 1";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



