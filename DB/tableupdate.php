
<?php

    include("dbconn.php");

    $sql = "DROP TABLE `Central team simtrak`,`City of joy`,`Echo`,`GD1`,`Glowball`,`LSet plan`,`Simtrak Recuitment`";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



