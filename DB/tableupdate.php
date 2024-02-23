
<?php

    include("dbconn.php");

    $sql = "DELETE FROM teams WHERE id = '13'";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



