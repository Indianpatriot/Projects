
<?php

    include("dbconn.php");

    $sql = "INSERT INTO `teams` (`id`, `team_name`, `team_domain`, `Status`) VALUES
    (1, 'Central team simtrak', 'domain1', 'Active')";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



