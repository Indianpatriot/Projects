
<?php

    include("dbconna.php");

    $sql = "DROP TABLE `Pinnacle 1`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



