
<?php

    include("dbconn.php");

    $sql = "UPDATE `role_teams` SET `user_id` = '56' WHERE `user_id` = '50'";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



