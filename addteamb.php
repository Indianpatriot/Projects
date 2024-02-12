<?php
include("DB/dbconn.php");
$i =0;
$j=0;
$parameter=100;
$data_type = 500;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["newteam"])){
        $newteam = $_POST["newteam"];
        $teamdomain = $_POST["teamdomain"];           
        $sql1 = "CREATE TABLE `$newteam` (`ID` INT(10) NOT NULL AUTO_INCREMENT, `goalset` VARCHAR(50) NOT NULL , `Member ID` INT(10) NOT NULL , `Member Name` VARCHAR(50) NOT NULL , `Date` DATE NOT NULL, PRIMARY KEY (`ID`))";
        $sql2 = "INSERT INTO `teams`(`team_name`, `team_domain`,`Status`) VALUES ('$newteam','$teamdomain','Active')";
        if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)){
            $sql3 = "SELECT * FROM `teams` WHERE `team_name` = '$newteam'";
            $newteamsid = mysqli_query($conn,$sql3);
            $newteamid = mysqli_fetch_object($newteamsid);
            $teamID = $newteamid->id;
            $sql4 = "INSERT INTO `$newteamid->team_name` (`goalset`) VALUES ('1')";
            $a = mysqli_query($conn,$sql4); 
        }
    }
    else{ 
        $teamID = $_POST["team_name"];
    }
    do{ 
        $sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
        $teamname = mysqli_query($conn,$sql1);
        $teamname = mysqli_fetch_object($teamname);
        if(isset($_POST[$parameter])){
            
            if($_POST[$data_type]=="DATE"){
                $sql1 ="ALTER TABLE `$teamname->team_name` ADD `$_POST[$parameter]` $_POST[$data_type]  DEFAULT CURRENT_TIMESTAMP";
            }else{                    
                $sql1 ="ALTER TABLE `$teamname->team_name` ADD `$_POST[$parameter]` $_POST[$data_type](50)";
            }
                
            if(mysqli_query($conn ,$sql1)){
                $sql2 ="INSERT INTO `goal_parameter`(`team_id`, `parameter`, `parameter_data_type`) VALUES ('$teamID','".$_POST[$parameter]."','".$_POST[$data_type]."')";
            }
            if(mysqli_query($conn ,$sql2)){
            
            }
        }    
        $j++; 
        $parameter++;
        $data_type++;
    }while($j<$_COOKIE["inputCount"]);
    echo $teamID;
}else{
    echo "not ok";
}



?>