
<?php

    include("dbconn.php");

    $sql = "delete from `role_teams` WHERE `role_teams`.`team_id` <> -1";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



