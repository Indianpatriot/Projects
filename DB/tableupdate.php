
<?php

    include("dbconn.php");

    $sql = "DELETE FROM `Central team simtrak`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



