<?php
include("DB/dbconn.php");

$username = $_SESSION['user_id'];
// print team goal
$teamID = $_SESSION["team_id"];
$sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
$teamname = mysqli_query($conn,$sql1);
$teamname = mysqli_fetch_object($teamname);
$goal_parameter = "SELECT * FROM `goal_parameter` WHERE team_id ='0' OR team_id =".$_SESSION["team_id"]." ORDER BY `goal_parameter`.`team_id` ASC ";
    $parameter = mysqli_query($conn,$goal_parameter);
    $parameters = mysqli_query($conn,$goal_parameter);
    $goalparameters = mysqli_query($conn,$goal_parameter);
    $array = array();
    $i = 0;
    while($para = mysqli_fetch_object($parameter)){
      $array[$i] = $para->parameter;
      $i++;
    }
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $updategoal = "UPDATE `$teamname->team_name` SET `Member ID` = ".$_REQUEST["team_manager_id"].", `Member Name`= '".$_REQUEST["team_manager_name"]."' WHERE `goalset` = '1'";
    if(mysqli_query($conn,$updategoal)){
        $i=0;  
        foreach($array as $value){
            if($value == 'Date' || $value == 'Member Name'){$i++; continue;}
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