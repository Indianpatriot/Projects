<?php
include("DB/dbconn.php");
$teamname = $_SESSION["team_name"];
$goal_parameter = "SELECT * FROM `goal_parameter` WHERE team_id ='0' OR team_id =".$_SESSION["team_id"]." ORDER BY `goal_parameter`.`team_id` ASC ";
$parameter = mysqli_query($conn,$goal_parameter);  
$array = array();
$i = 0;
while($para = mysqli_fetch_object($parameter)){
    $array[$i] = $para->parameter;
    $i++;
}
$totalsum = array_slice($array, 2);
$totalsum = "" . implode(", ", array_map(function($item) { return "SUM(`$item`) AS `$item`"; }, $totalsum)) . "";
// total history and month total

if(isset($_POST["select_month"])){
    $_SESSION["month"] = $_POST["select_month"];
    $_SESSION["year"] = $_POST["select_year"];
    echo "ok";
}   
if(isset($_SESSION["month"])){
    $month = $_SESSION["month"];
    $year = $_SESSION["year"];
    $start_date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01';
    $end_date = date('Y-m-t', strtotime($start_date));
}else{
    $year = date('Y');
    $month = date('n');
    $start_date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01';
    $end_date = date('Y-m-t', strtotime($start_date));
}
if(isset($_POST["membername"])){
    if($_POST["membername"] == "all_goal"){
        unset($_SESSION["individualid"]);
    }else{
        $_SESSION["individualid"] = $_POST["membername"];
        echo "ok";
    }
    
}
if(isset($_SESSION["individualid"])){
    $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND 'Member ID' = '".$_SESSION["individualid"]."' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
    $totalhistory = "select $totalsum from `$teamname->team_name` where `goalset` = '0'";
    $totalmonth = "select $totalsum from `$teamname->team_name` where `Date` BETWEEN '$start_date' AND '$end_date' AND `goalset` = '0' AND 'Member ID' = '".$_SESSION["individualid"]."'";
}else{
    if($_SESSION['role_id'] != 4){
        $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
        $totalhistory = "select $totalsum from `$teamname->team_name` where `goalset` = '0'";
        $totalmonth = "select $totalsum from `$teamname->team_name` where `Date` BETWEEN '$start_date' AND '$end_date' AND `goalset` = '0'";        
    }else{
        $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND 'Member ID' = '".$_SESSION['user_id']."' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
        $totalhistory = "select $totalsum from `$teamname->team_name` where `goalset` = '0'";
        $totalmonth = "select $totalsum from `$teamname->team_name` where `Date` BETWEEN '$start_date' AND '$end_date' AND `goalset` = '0' AND 'Member ID' = '".$_SESSION["individualid"]."'";        
    }
}
    $results = mysqli_query($conn ,$sql2);
    $totalmonth = mysqli_query($conn,$totalmonth);
    $totalmonth = mysqli_fetch_object($totalmonth);
    $totalhistory = mysqli_query($conn,$totalhistory);
    $totalhistory = mysqli_fetch_object($totalhistory);

?>