
<?php

    include("dbconn.php");

    $sql = "DELETE FROM `users` WHERE `role_id` <> '1'";
// pvsinha991@gmail.com   June@220389 Priti sinha
    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



