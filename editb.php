<?php
include("DB/dbconn.php");
    $teamid = $_SESSION["team_id"];
    $teamn ="SELECT * FROM `teams` WHERE `id` = '$teamid'";
    $results = mysqli_query($conn ,$teamn);
    $teamname = mysqli_fetch_object($results);
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
    $val = 0;
    foreach($array as $value){
        if($value == "Date" || $value == "Member Name"){  continue; }else{ 
            echo $_REQUEST[$val]." ".$val." ".$value."<br>";
              
            $sql1="UPDATE `goal_parameter` SET `parameter`='".$_REQUEST[$val]."' WHERE parameter = '$value'";
            $sql2="ALTER TABLE `$teamname->team_name` CHANGE `$value` `".$_REQUEST[$val]."` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL";
            if(mysqli_query($conn,$sql1)){
                if(mysqli_query($conn,$sql2)){
                }
            }
        }
        $val++;
    }

    echo '<script type="text/javascript">';
    echo 'window.location.href="Untitled-1.php";';
    echo '</script>';



?>