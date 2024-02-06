
<?php

    include("dbconn.php");

    $sql = "UPDATE `users` SET `username`='Priti sinha' WHERE `id`= '56'";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



