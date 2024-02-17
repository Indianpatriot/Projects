<?php
include("DB/dbconn.php");
$teamname = $_SESSION["team_name"];
  

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $_SESSION["month"] = $_POST["select_month"];
    $_SESSION["year"] = $_POST["select_year"];
    echo "ok";
}   
    $month = $_SESSION["month"];
    $year = $_SESSION["year"];
    $start_date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01';
    $end_date = date('Y-m-t', strtotime($start_date));
    if($_SESSION['role_id'] != 4){
    $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
    }else{
        $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
    }
    $results = mysqli_query($conn ,$sql2);

?>