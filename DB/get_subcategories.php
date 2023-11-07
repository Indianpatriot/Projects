<?php
include("dbconn.php");
// Simulated subcategory data - you would replace this with data from your server or another source
$subcategories = array();


$id = "SELECT * FROM `role_teams` where `role_id` = '3' and `team_id` = '".$_GET["category"]."'";
$ids = mysqli_query($conn,$id);
$i=0;
$ruid = array();
while($role = mysqli_fetch_object($ids)){
    $ruid[$i]= $role->user_id;
    $i++;
}

$subcategories = array();
$result = "(" . implode(",", $ruid) . ")";
$user ="SELECT * FROM `users` WHERE `role_id` ='3' ANd id IN $result";
$username = mysqli_query($conn,$user);
while($row = mysqli_fetch_object($username)){
        $subcategories[] = array("id" => $row->username, "name" => $row->username);
        break;
}

// Return the subcategory data as JSON
header('Content-Type: application/json');
echo json_encode($subcategories);
?>
