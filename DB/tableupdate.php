
<?php

    include("dbconn.php");

    $sql = "DROP TABLE `new team`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



