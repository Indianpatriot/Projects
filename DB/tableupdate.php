
<?php

    include("dbconn.php");

    $sql = "DELETE FROM users WHERE `users`.`id` IN(11,16,18,19,20,21,22,23,24,25,29,30,31,32,33,34,35,36,44)";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



