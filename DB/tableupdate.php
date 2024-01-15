
<?php

    include("dbconn.php");

    $sql = "TRUNCATE TABLE `teams`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



