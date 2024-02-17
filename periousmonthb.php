<?php
include("DB/dbconn.php");
$teamname = $_SESSION["team_name"];
  

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
    if($_POST["membername"] === "all_goal"){
        unset($_SESSION["individualid"]);
    }else{
        $_SESSION["individualid"] = $_POST["memebrname"];
    }
    echo "ok";
}
if(isset($_SESSION["individualid"])){
    $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND 'ID' = '".$_SESSION['individual']."' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
}else{
    if($_SESSION['role_id'] != 4){
        $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
    }else{
        $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND 'ID' = '".$_SESSION['user_id']."' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
    }
}
    $results = mysqli_query($conn ,$sql2);

?>