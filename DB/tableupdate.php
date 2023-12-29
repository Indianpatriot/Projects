
<?php

    include("dbconn.php");

    $sql = "DELETE FROM `City of joy`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



