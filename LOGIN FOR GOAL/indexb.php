<?php

    include("DB/dbconn.php");
    $j=0;
    $parameter=100;
    $data_type = 500;
     
    if(isset($_COOKIE["inputCount"])){
    do{
        $teamID = $_REQUEST["team_name"];
        $sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
        $teamname = mysqli_query($conn,$sql1);
        $teamname = mysqli_fetch_object($teamname);
        if(isset($_REQUEST[$parameter])){
            // echo $j; ?> <br> <?php
            // echo $_REQUEST[$parameter];
            // echo $_REQUEST[$data_type];
            // echo $_REQUEST["team_name"];
            // echo $_REQUEST["team_mentor"];
            if($_REQUEST[$data_type]=="DATE"){
                $sql1 ="ALTER TABLE `$teamname->team_name` ADD `$_REQUEST[$parameter]` $_REQUEST[$data_type]  DEFAULT CURRENT_TIMESTAMP";
            }else{                    
                $sql1 ="ALTER TABLE `$teamname->team_name` ADD `$_REQUEST[$parameter]` $_REQUEST[$data_type](50)";
                }
            $sql2 ="INSERT INTO `goal_parameter`(`team_id`, `parameter`, `parameter_data_type`) VALUES ('".$_REQUEST["team_name"]."','".$_REQUEST[$parameter]."','".$_REQUEST[$data_type]."')";
            if(mysqli_query($conn ,$sql1)){
                echo "sql1";
            }
            if(mysqli_query($conn ,$sql2)){
                echo "sql2";
            }
        }    
        $j++; 
        $parameter++;
        $data_type++;
    }while($j<$_COOKIE["inputCount"]);
    }
    header("Location:Untitled-1.php");
    exit();
?>