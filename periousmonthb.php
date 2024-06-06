<?php
include("DB/dbconn.php");
$teamname = $_SESSION["team_name"];
$teamID = $_SESSION["team_id"];
$goal_parameter = "SELECT * FROM `goal_parameter` WHERE team_id ='0' OR team_id =" . $_SESSION["team_id"] . " ORDER BY `goal_parameter`.`team_id` ASC ";
$parameter = mysqli_query($conn, $goal_parameter);
$array = array();
$i = 0; 
while ($para = mysqli_fetch_object($parameter)) {
    $array[$i] = $para->parameter;
    $i++;
}
$totalsum = array_slice($array, 2);
$totalsum = "" . implode(", ", array_map(function ($item) {
    return "SUM(`$item`) AS `$item`"; }, $totalsum)) . "";
// total history and month total

if (isset($_POST["select_month"])) {
    $_SESSION["month"] = $_POST["select_month"];
    $_SESSION["year"] = $_POST["select_year"];
    echo "ok";
}
if (isset($_SESSION["month"])) {
    $month = $_SESSION["month"];
    $year = $_SESSION["year"];
    $setgoaldate = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-00';
    $start_date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01';
    $end_date = date('Y-m-t', strtotime($start_date));
} else {
    $year = date('Y');
    $month = date('n');
    $setgoaldate = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-00';
    $start_date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01';
    $end_date = date('Y-m-t', strtotime($start_date));
}
if (isset($_POST["membernames"])) {
    if ($_POST["membernames"] == 0) {
        unset($_SESSION["individualid"]);
    } else {
        $_SESSION["individualid"] = $_POST["membernames"];
    }
    echo "ok";
}
if (isset($_SESSION["individualid"])) {
    $goalset = "SELECT * FROM `$teamname` where `goalset`='1' AND `DATE` = '$setgoaldate'";
    $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND `Member ID` = '" . $_SESSION["individualid"] . "' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
    $totalhistory = "SELECT $totalsum FROM `$teamname` WHERE `goalset` = '0' AND `Member ID` = '" . $_SESSION["individualid"] . "'";
    $totalmonth = "SELECT $totalsum FROM `$teamname` WHERE `Date` BETWEEN '$start_date' AND '$end_date' AND `goalset` = '0' AND `Member ID` = '" . $_SESSION["individualid"] . "'";
} else {
    if ($_SESSION['role_id'] != 4) {
        $goalset = "SELECT * FROM `$teamname` where `goalset`='1' AND `DATE` = '$setgoaldate'";
        $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
        $totalhistory = "SELECT $totalsum FROM `$teamname` WHERE `goalset` = '0'";
        $totalmonth = "SELECT $totalsum FROM `$teamname` WHERE `Date` BETWEEN '$start_date' AND '$end_date' AND `goalset` = '0'";
    } else {
        $goalset = "SELECT * FROM `$teamname` where `goalset`='1' AND `DATE` = '$setgoaldate'";
        $sql2 = "SELECT * FROM `$teamname` WHERE `goalset` <> '1' AND `Member ID` = '" . $_SESSION['user_id'] . "' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
        $totalhistory = "SELECT $totalsum FROM `$teamname` WHERE `goalset` = '0' `Member ID` = '" . $_SESSION["individualid"] . "'";
        $totalmonth = "SELECT $totalsum FROM `$teamname` WHERE `Date` BETWEEN '$start_date' AND '$end_date' AND `goalset` = '0' AND `Member ID` = '" . $_SESSION["individualid"] . "'";
    }
}

$goalset = mysqli_query($conn, $goalset);
$goalset = mysqli_fetch_object($goalset);
$results = mysqli_query($conn, $sql2);
$totalmonth = mysqli_query($conn, $totalmonth);
$totalmonth = mysqli_fetch_object($totalmonth);
$totalhistory = mysqli_query($conn, $totalhistory);
$totalhistory = mysqli_fetch_object($totalhistory);

$abcd = $array[2];
$ancdefg = $totalmonth->$abcd;
$team_target = "UPDATE `teams` SET `Target_achiv` = '$ancdefg' WHERE `id` = '$teamID'";
$team_target = mysqli_query($conn, $team_target);


// total history
$totalhistorystratingdate = "SELECT * FROM `$teamname` ORDER BY `Date` ASC LIMIT 1 OFFSET 1";
$totalhistorystratingdate = mysqli_query($conn,$totalhistorystratingdate);
$totalhistorystratingdate = mysqli_fetch_object($totalhistorystratingdate);

?>