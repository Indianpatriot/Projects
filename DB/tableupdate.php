
<?php

    include("dbconna.php");

    $sql = "UPDATE `users` SET `username`='Isha Malik' WHERE `id` = '62'";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



