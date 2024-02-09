<?php
include("DB/dbconn.php");

$username = $_SESSION['user_id'];
$total = array([],[]);
// print team goal
$teamID = $_SESSION["team_id"];
$sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
$teamname = mysqli_query($conn,$sql1);
$teamname = mysqli_fetch_object($teamname);

if(isset($_REQUEST["team_manager_id"])){
    $updategoal = "UPDATE `$teamname->team_name` SET `Member ID` = ".$_REQUEST["team_manager_id"].", `Member Name`= '".$_REQUEST["team_manager_name"]."' WHERE `goalset` = '1'";
    if(mysqli_query($conn,$updategoal)){
        $i=0;  
        foreach($array as $value){
            if($value == "Member Name"){continue;}
            $updategoal = "UPDATE `$teamname->team_name` SET `$value`= '".$_REQUEST[$i]."' WHERE `goalset` = '1'";
            if(mysqli_query($conn,$updategoal)){
            }else{
                echo $conn->error;
            }
            $i++;
        }  
        echo "ok"
    }else{
        echo "error";
    }
}


?>