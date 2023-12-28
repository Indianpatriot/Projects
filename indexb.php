<?php

    include("DB/dbconn.php");
    
    $j=0;
    $parameter=100;
    $data_type = 500;
     
    if(isset($_COOKIE["inputCount"])){
        if(isset($_REQUEST["newteam"])){
            $newteam = $_REQUEST["newteam"];
            $teamdomain = $_REQUEST["teamdomain"];           
            $sql1 = "CREATE TABLE `$newteam` (`ID` INT(10) NOT NULL , `Member ID` INT(10) NOT NULL , `Member Name` VARCHAR(50) NOT NULL , `Date` DATE NOT NULL )";
            $sql2 = "INSERT INTO `teams`(`team_name`, `team_domain`) VALUES ('$newteam','$teamdomain')";
            if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)){
                $sql3 = "SELECT * FROM `teams` WHERE `team_name` = '$newteam'";
                $newteamsid = mysqli_query($conn,$sql3);
                $newteamid = mysqli_fetch_object($newteamsid);
                $teamID = $newteamid->id;
            }
        }
        else{ 
            $teamID = $_REQUEST["team_name"];
        }
            do{ 
                echo $teamID;
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
                        $sql2 ="INSERT INTO `goal_parameter`(`team_id`, `parameter`, `parameter_data_type`) VALUES ('$teamID','".$_REQUEST[$parameter]."','".$_REQUEST[$data_type]."')";
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
    echo '<script type="text/javascript">';
    echo 'window.location.href = "DB/access.php?team_id=' . $teamID . '";';
    echo '</script>';
?>