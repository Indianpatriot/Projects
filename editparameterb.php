<?php

include("DB/dbconn.php");
$team_id = $_SESSION["team_id"];
$goal_parameter = "SELECT * FROM `goal_parameter` WHERE team_id ='0' OR team_id ='$team_id' ORDER BY `goal_parameter`.`team_id` ASC ";
$parameter = mysqli_query($conn,$goal_parameter);
$i=0;
while($para = mysqli_fetch_object($parameter)){
    $array[$i] = $para->parameter;
    $idarray[$i] = $para->parameter_id;
    $i++;
}

$val = 0;
if(isset($_POST[$val])){
    foreach($array as $value){
        if($value == "Date" || $value == "Member Name"){  continue; }else{       
            $sql1="UPDATE `goal_parameter` SET `parameter`='".$_POST[$val]."' WHERE parameter = '$value'";
            $sql2="ALTER TABLE `$teamname->team_name` CHANGE `$value` `".$_POST[$val]."` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL";
            if(mysqli_query($conn,$sql2)){
                if(mysqli_query($conn,$sql1)){
                }
            }
        }
        $val++;
    }
}

?>