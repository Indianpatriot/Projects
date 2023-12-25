<?php

include("dbconn.php");

    $sql = "INSERT INTO `roles` (`id`, `role_name`) VALUES
    (1, 'Admin'),
    (2, 'Subadmin'),
    (3, 'Manager'),
    (4, 'Member'),
    (5, 'noramal user');

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
$conn->close();
?>
