<?php

    include("dbconn.php");

    $sql = "SELECT * FROM `teams`";
    $results = mysqli_query($conn ,$sql);
    $team_name = mysqli_query($conn ,$sql);
    $sql1 = "SELECT * FROM `users` WHERE `role_id` = 3";
    $team_mentor = mysqli_query($conn ,$sql1);
?>