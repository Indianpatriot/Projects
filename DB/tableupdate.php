
<?php

    include("dbconn.php");

    $sql = "INSERT INTO `role_teams` (`user_id`, `role_id`, `team_id`) VALUES ('49','1','-1')";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



