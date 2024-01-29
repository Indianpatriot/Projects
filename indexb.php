<?php

    include("DB/dbconn.php");
    $i =0;
    $j=0;
    $parameter=100;
    $data_type = 500;
    $selectedOptions = isset($_POST["options"]) ? $_POST["options"] : [];
    $arrayLength = count($selectedOptions);

    if(isset($_REQUEST["team_activation"])){
        $teamastatus = "UPDATE `teams` SET `Status` = '".$_REQUEST["team_activation"]."' WHERE `teams`.`id` = '".$_REQUEST["team_id"]."'";
        if(mysqli_query($conn ,$teamastatus)){
            echo '<script type="text/javascript">';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }else{
            echo $conn->error;
        }
    }

    if(isset($_REQUEST["team_domain"])){
        $teamedit = "UPDATE `teams` SET `team_name` = '".$_REQUEST["team_name"]."', `team_domain` = '".$_REQUEST["team_domain"]."' WHERE `teams`.`id` = '".$_REQUEST["team_id"]."'";
        $changeteamname = "RENAME TABLE `".$_REQUEST["team_old"]."` TO `".$_REQUEST["team_name"]."`";
        if(mysqli_query($conn ,$teamedit)){
            if(mysqli_query($conn ,$changeteamname)){
                echo '<script type="text/javascript">';
                echo 'window.location.href = "index.php";';
                echo '</script>';
            }else{
                echo $conn->error;
            }
        }else{
            echo $conn->error;
        }
    }
     
    if(isset($_COOKIE["inputCount"])){
        if(isset($_REQUEST["newteam"])){
            $newteam = $_REQUEST["newteam"];
            $teamdomain = $_REQUEST["teamdomain"];           
            $sql1 = "CREATE TABLE `$newteam` (`ID` INT(10) NOT NULL AUTO_INCREMENT, `goalset` VARCHAR(50) NOT NULL , `Member ID` INT(10) NOT NULL , `Member Name` VARCHAR(50) NOT NULL , `Date` DATE NOT NULL, PRIMARY KEY (`ID`))";
            $sql2 = "INSERT INTO `teams`(`team_name`, `team_domain`,`Status`) VALUES ('$newteam','$teamdomain','Active')";
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
           
            $sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
            $teamname = mysqli_query($conn,$sql1);
            $teamname = mysqli_fetch_object($teamname);
            if(isset($selectedOptions[$i])){
                
                if($selectedOptions[$i]=="DATE"){
                    $sql1 ="ALTER TABLE `$teamname->team_name` ADD `$selectedOptions[$i]` varchar  DEFAULT CURRENT_TIMESTAMP";
                }else{                    
                    $sql1 ="ALTER TABLE `$teamname->team_name` ADD `$selectedOptions[$i]` varchar(50)";
                }
                    
                if(mysqli_query($conn ,$sql1)){
                    $sql2 ="INSERT INTO `goal_parameter`(`team_id`, `parameter`, `parameter_data_type`) VALUES ('$teamID','".$selectedOptions[$i]."','varchar')";
                }
                if(mysqli_query($conn ,$sql2)){
                    
                }
            }    
            $i++; 
        }while($i<$arrayLength);

            do{ 

                $sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
                $teamname = mysqli_query($conn,$sql1);
                $teamname = mysqli_fetch_object($teamname);
                if(isset($_REQUEST[$parameter])){
                    
                    if($_REQUEST[$data_type]=="DATE"){
                        $sql1 ="ALTER TABLE `$teamname->team_name` ADD `$_REQUEST[$parameter]` $_REQUEST[$data_type]  DEFAULT CURRENT_TIMESTAMP";
                    }else{                    
                        $sql1 ="ALTER TABLE `$teamname->team_name` ADD `$_REQUEST[$parameter]` $_REQUEST[$data_type](50)";
                    }
                        $sql2 ="INSERT INTO `goal_parameter`(`team_id`, `parameter`, `parameter_data_type`) VALUES ('$teamID','".$_REQUEST[$parameter]."','".$_REQUEST[$data_type]."')";
                    if(mysqli_query($conn ,$sql1)){
                    
                    }
                    if(mysqli_query($conn ,$sql2)){
                        
                    }
                }    
                $j++; 
                $parameter++;
                $data_type++;
            }while($j<$_COOKIE["inputCount"]);
        echo '<script type="text/javascript">';
        echo 'window.location.href = "DB/access.php?team_id=' . $teamID . '";';
        echo '</script>';    
        
    }

?>