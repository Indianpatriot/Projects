
<?php

    include("dbconn.php");

    $sql = "UPDATE `role_teams` SET `` = '56' WHERE `id` = '50'";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



