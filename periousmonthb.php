<?php
include("DB/dbconn.php");
$teamname = $_SESSION["team_name"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $month = $_POST["select_month"];
    $year = $_POST["select_year"];
    $start_date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01';
    $end_date = date('Y-m-t', strtotime($start_date));
    $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
    $results = mysqli_query($conn ,$sql2);
    echo "ok";
  }else{
    $year = date('Y');
    $month = date('n');
    $start_date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01';
    $end_date = date('Y-m-t', strtotime($start_date));
    $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
    $results = mysqli_query($conn ,$sql2);
    }


?>