
<?php

    include("dbconn.php");

    $sql = "ALTER TABLE `echo` RENAME TO `Echo`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



