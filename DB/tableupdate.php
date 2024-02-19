
<?php

    include("dbconna.php");

    $sql = "DELETE FROM `LSET`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



