<?php

include("DB/dbconn.php");
$username = $_SESSION['user_id'];

// print team goal
$teamID = $_SESSION["team_id"];
$sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
$teamname = mysqli_query($conn,$sql1);
$teamname = mysqli_fetch_object($teamname);
$sql2 = "SELECT * FROM `$teamname->team_name`";
$results = mysqli_query($conn ,$sql2);

// team parameter
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

$sql3 = "SELECT * FROM `users` WHERE `role_id` ='4' OR `role_id` ='3'";
$sql4 = "SELECT * FROM `role_teams` WHERE `team_id` = ".$_SESSION["team_id"]." ";
$user_result = mysqli_query($conn ,$sql3);
$role_result = mysqli_query($conn ,$sql4);
$user_array_id = array();
$user_array_name = array();
$role_array_id = array();
$user_role_id = array();
$i =0;
while($user_name = mysqli_fetch_object($user_result)){
    $user_array_id[$i]=$user_name->id;
    $user_array_name[$i]=$user_name->username;
    $i++;
}
$i = 0;
while($user_id = mysqli_fetch_object($role_result)){
    $role_array_id[$i]=$user_id->user_id;
    $user_role_id[$i]=$user_id->role_id;
    $i++;
}

$inputpara = array();
$i=0;
$goalp = array();
    while($parat = mysqli_fetch_object($goalparameters)){
      if($parat->parameter=="Date" || $parat->parameter == 'Member Name'){
        continue;
      }  
      $goalp[$i] = $parat->parameter;  
      $i++;
    }
    $z=0;
    while(isset($_REQUEST[$z])){ 
        if(isset($_REQUEST[$z])){
        $inputpara[$z] = $_REQUEST[$z];
        echo $inputpara[$z];
        }
        $z++;
    }
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $result = "`" . implode("`,`", $goalp) . "`)";
    $results = "'" . implode("','", $inputpara) . "')";
    if(isset($_REQUEST["membername"])){
        $i = $_REQUEST["membername"];
        echo $user_array_id[$i];
        echo $user_array_name[$i];
        $goal = "insert into `$teamname->team_name` (`Member ID`, `Member Name`, $result value ('$user_array_id[$i]', '$user_array_name[$i]',$results";
        echo "hihi";
    }else{
        $goal = "insert into `$teamname->team_name` (`Member ID`, `Member Name`, $result value ('".$_SESSION['user_id']."', '".$_SESSION['user_name']."',$results";
        echo "hihi";
    }
    if(mysqli_query($conn,$goal)){
       header("location:Untitled-1.php");
    }
    else{
        echo "Undifiend error";
    }
}


// Create a string with array elements enclosed in parentheses and separated by commas

?>