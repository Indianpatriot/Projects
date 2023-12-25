
<?php

    include("dbconn.php");

    $sql = "INSERT INTO `role_teams` (`user_id`, `role_id`, `team_id`) VALUES
    (10, 1, -1),
    (11, 2, 1),
    (11, 2, 2),
    (16, 2, 3),
    (18, 5, 0),
    (19, 3, 2),
    (20, 3, 3),
    (21, 4, 1),
    (22, 4, 1),
    (23, 4, 2),
    (24, 4, 2),
    (25, 4, 3),
    (29, 5, 0),
    (30, 4, 1),
    (31, 4, 6),
    (32, 4, 6),
    (33, 4, 6),
    (34, 5, 0),
    (35, 3, 6),
    (36, 5, 0)";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



