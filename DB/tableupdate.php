<?php

include("dbconn.php");

    $sql = "INSERT INTO `goal_parameter` (`parameter_id`, `team_id`, `parameter`, `parameter_data_type`) VALUES
    (1, 6, 'leads', 'INT'),
    (2, 0, 'Date', 'text'),
    (10, 2, 'Date', 'varchar'),
    (11, 0, 'Member Name', '50'),
    (23, 1, 'New tasks received', 'text'),
    (24, 1, 'Tasks in progress', 'text'),
    (25, 1, 'Continuous tasks', 'text'),
    (26, 1, 'Tasks completed today', 'text'),
    (27, 2, 'LSeT Website', 'text'),
    (28, 2, 'ADORE Website', 'text'),
    (29, 2, 'Simtrak Website', 'text'),
    (30, 2, 'ASCEND website', 'text'),
    (31, 2, 'Weeho Portal', 'text'),
    (32, 2, 'Foreword website', 'text'),
    (33, 2, 'Goal Management System', 'text'),
    (34, 2, 'Weeho App', 'text'),
    (35, 2, 'Simtrak app', 'text'),
    (36, 3, 'Leads', 'text'),
    (37, 3, 'Non lset form filled', 'text'),
    (38, 3, 'Forms filled', 'text'),
    (39, 3, 'Screening', 'text'),
    (40, 3, 'Final Int', 'text'),
    (41, 3, 'Selected', 'text'),
    (42, 3, 'Joining', 'text'),
    (43, 4, 'ADORE', 'text'),
    (44, 4, 'Foreword', 'text'),
    (45, 4, 'Sawec', 'text'),
    (46, 4, 'Others', 'text'),
    (47, 5, 'Leads', 'text'),
    (48, 5, 'Domain', 'text'),
    (49, 5, 'Int Sch', 'text'),
    (50, 5, 'Int con.', 'text'),
    (51, 5, 'Selected', 'text'),
    (52, 5, 'Orientation', 'text'),
    (53, 5, 'Joined', 'text'),
    (58, 1, 'Article recieved', 'INT'),
    (59, 1, 'Cities started', 'VARCHAR'),
    (60, 6, 'Cities ongoing', 'VARCHAR'),
    (61, 6, 'cities started', 'VARCHAR'),
    (62, 6, 'Centres', 'VARCHAR'),
    (63, 6, 'Sessions', 'VARCHAR')";
    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
