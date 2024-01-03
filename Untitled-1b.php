<?php

include("DB/dbconn.php");

$username = $_SESSION['user_id'];
$total = array([],[]);
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
        }
        $z++;
    }
if($_SERVER['REQUEST_METHOD']=="POST"){
    $date_data = $_REQUEST["date_data"];
    $result = "`Date`,`" . implode("`,`", $goalp) . "`)";
    $results = "'$date_data','" . implode("','", $inputpara) . "')";
    echo $result;
    if(isset($_REQUEST["membername"])){
        $i = $_REQUEST["membername"];
        $temp_uid = $user_array_id[$i]; 
       //Checking If data is thee in the database
        $query_check_db = "SELECT * FROM `$teamname->team_name` WHERE `Member ID` = '$temp_uid' AND `Date` = '$date_data'";
        $check = mysqli_query($conn,$query_check_db);
        $rowcount = mysqli_num_rows($check);
        if($rowcount >= "1"){
            //Do Nothing and alert user that data is present
            $_SESSION["allready"] = "$user_array_name[$i], all ready filled goal";
            echo '<script type="text/javascript">';
            echo 'window.location.href="Untitled-1.php";';
            echo '</script>';
        }else{
            $goal = "insert into `$teamname->team_name` (`Member ID`, `Member Name`, $result value ('$user_array_id[$i]', '$user_array_name[$i]',$results";
        }
       
    }else{
        $query_check_db = "SELECT * FROM `$teamname->team_name` WHERE `Member ID` = '".$_SESSION['user_id']."' AND `Date` = '$date_data'";
        $check = mysqli_query($conn,$query_check_db);
        $rowcount = mysqli_num_rows($check);
        if($rowcount >= "1"){
            //Do Nothing and alert user that data is present
            $_SESSION["allready"] = "".$_SESSION['user_name'].", all ready filled goal";
            header("Location:Untitled-1.php");
            exit();
        }else{
        $goal = "insert into `$teamname->team_name` (`Member ID`, `Member Name`, $result value ('".$_SESSION['user_id']."', '".$_SESSION['user_name']."',$results";
        }
    }
    if(mysqli_query($conn,$goal)){
        echo "not done";
        echo '<script type="text/javascript">';
        echo 'window.location.href="Untitled-1.php";';
        echo '</script>';
    }
    else{
        echo "Undifiend error";
    }
}

// add normal member
$normalmember = "SELECT * FROM `users` WHERE `role_id` IN (3, 5) ORDER BY id ASC";
$normaladdmember = mysqli_query($conn,$normalmember);

if(isset($_GET["membername"])){
    $id = $_GET["membername"];
    $role_id= $_GET["membertype"];
    $sql35 = "SELECT * FROM `users` WHERE `id` = '$id'";
    $result35 = mysqli_query($conn,$sql35);
    $row = mysqli_fetch_object($result35);
    if($row->role_id==3){
        if($role_id==3){
            $sql2 = "INSERT INTO `role_teams` (`role_id`, `team_id`, `user_id`) VALUES ('$role_id', '$teamID', '$id')";
            if(mysqli_query($conn,$sql2)){
                echo '<script type="text/javascript">';
                echo 'window.location.href="Untitled-1.php";';
                echo '</script>';
            }
        }else{
            $_SESSION["team_manager"] = "$$row->username is a team manager they do not add team member";
            echo '<script type="text/javascript">';
            echo 'window.location.href="Untitled-1.php";';
            echo '</script>';
        }
    }else{
        $sql1 = "UPDATE `users` SET `role_id`='$role_id' WHERE `id` = '$id' ";
        $sql2 = "INSERT INTO `role_teams` (`role_id`, `team_id`, `user_id`)
        VALUES ('$role_id', '$teamID', '$id')";
        if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)){
            echo '<script type="text/javascript">';
            echo 'window.location.href="Untitled-1.php";';
            echo '</script>';
        }
    }
}

// Create a string with array elements enclosed in parentheses and separated by commas
$printid = "SELECT * FROM `role_teams` WHERE `role_id` IN (3,4) AND `team_id` ='$teamID'  ORDER BY `role_id`";
$printidselect = mysqli_query($conn,$printid);
$selectid = "";
if(mysqli_num_rows($printidselect)>0){
$print = array();
$p = 0;
while($pri = mysqli_fetch_object($printidselect)){
    $print[$p] = $pri->user_id;
    $p++;
}
$selectid = "(" . implode(",", $print) . ")";
$printname = "SELECT * FROM `users` WHERE `id` IN $selectid ORDER BY role_id ASC";
$nameprint = mysqli_query($conn,$printname);

$print = array();
$p = 0;
while($pri = mysqli_fetch_object($nameprint)){
    $print[$p] = $pri->username;
    $p++;
}
$selectid = "(" . implode(",", $print) . ")";
}
?>