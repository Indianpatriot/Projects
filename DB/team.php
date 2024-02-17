<?php

    include("dbconn.php");
    if($_SESSION['role_id']==1){
        $sql = "SELECT LPAD(id, 4, '0') AS id , `team_name`, `team_domain`, `Status`,`team_manager`,`team_coordinator`, `Target`,`Target_achiv` FROM `teams`";
    }else{
        $selectedteam = "SELECT * FROM `role_teams`";
        $selectedteam = mysqli_query($conn,$selectedteam);
        $selectids = array();
        $i = 0;
        while($selecteteam = mysqli_fetch_object($selectedteam)){
           $selectids[$i] = $selecteteam->team_id;
           $i++; 
        }
        $sql = "SELECT LPAD(id, 4, '0') AS id , `team_name`, `team_domain`, `Status`,`team_manager`,`team_coordinator`,`Target`,`Target_achiv` FROM `teams` where `Status` ='Active' AND `id` = '1'";
    }
    $results = mysqli_query($conn ,$sql);
    $teamactive = mysqli_query($conn ,$sql);
    $editteam =  mysqli_query($conn ,$sql);
    $team_name = mysqli_query($conn ,$sql);
    $sql1 = "SELECT * FROM `users` WHERE `role_id` = 3";
?>