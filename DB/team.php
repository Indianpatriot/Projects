<?php

    include("dbconn.php");
    if($_SESSION['role_id']==1){
        $sql = "SELECT LPAD(id, 4, '0') AS id , `team_name`, `team_domain`, `Status` FROM `teams`";
    }else{
        $sql = "SELECT LPAD(id, 4, '0') AS id , `team_name`, `team_domain`, `Status` FROM `teams` where `Status` ='Active'";
    }
    $results = mysqli_query($conn ,$sql);
    $teamactive = mysqli_query($conn ,$sql);
    $editteam =  mysqli_query($conn ,$sql);
    $team_name = mysqli_query($conn ,$sql);
    $sql1 = "SELECT * FROM `users` WHERE `role_id` = 3";
    $team_mentor = mysqli_query($conn ,$sql1);
?>