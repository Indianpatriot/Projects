<?php

include("DB/dbconn.php");
$username = $_SESSION['user_id'];
 
if(isset($_REQUEST[0])){
    if($_SESSION["team_id"]==1){
        $sql = "INSERT INTO `record`(`name`, `month`,`Leads_Generation`,`progressive`, `sessions_goals`, `sales`, `centres_spoken_to`, `centres_called`, `centre_emails`) VALUES ('".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."')";
        $result = mysqli_query($conn ,$sql);
        header("location:Untitled-1.php");
        exit();
    }else{
        $sql ="INSERT INTO `echo`(`Name`, `Month`, `Date`, `Tasks`, `Task Done By`, `Members`, `Deadline`, `Status`, `Link`) VALUES ('".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."','".$_POST[0]."')";
        $result = mysqli_query($conn ,$sql);
        header("location:Untitled-1.php");
        exit();
    }
}

$sql1 = "SELECT * FROM `record`";
$sql2 = "SELECT * FROM `echo`";
if($_SESSION["team_id"]==1){
    $results = mysqli_query($conn ,$sql1);
}else{
    $results = mysqli_query($conn ,$sql2);
}
$sql3 = "SELECT * FROM `users` WHERE `role_id` ='4'";
$sql4 = "SELECT * FROM `role_teams` WHERE `team_id` = ".$_SESSION["team_id"]." ";
$user_result = mysqli_query($conn ,$sql3);
$role_result = mysqli_query($conn ,$sql4);
$user_array_id = array();
$user_array_name = array();
$role_array_id = array();
$i =0;
while($user_name = mysqli_fetch_object($user_result)){
    $user_array_id[$i]=$user_name->id;
    $user_array_name[$i]=$user_name->username;
    $i++;
}
$i = 0;
while($user_id = mysqli_fetch_object($role_result)){
    $role_array_id[$i]=$user_id->user_id;
    $i++;
}
?>