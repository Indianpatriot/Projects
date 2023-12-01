<?php

include("dbconn.php");

    $sql = "INSERT INTO `teams` (`id`, `team_name`, `team_domain`, `Status`) VALUES
    (1, 'Central team simtrak', 'domain1', 'Active'),
    (2, 'Echo', 'domain2', 'Active'),
    (3, 'LSet plan', 'domain3', 'Active'),
    (4, 'GD1', 'domain4', 'Active'),
    (5, 'Simtrak Recuitment', 'domain5', 'Active'),
    (6, 'City of joy', 'domain6', 'Active')";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
