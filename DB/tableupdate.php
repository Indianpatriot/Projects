
<?php

    include("dbconn.php");

    $sql = "DELETE FROM `role_teams` WHERE `team_id` <> '-1'";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



