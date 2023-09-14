<?php

include("DB/dbconn.php");
$username = $_SESSION['user_id'];


if(isset($_REQUEST['Rename_Option'])){
$Rename_Option = $_REQUEST['Rename_Option'];
$Leads_Generation = $_REQUEST['Leads_Generation'];
$Emails_Sent = $_REQUEST['Emails_Sent'];
$Calls_Made = $_REQUEST['Calls_Made'];
$Progressive_Responses = $_REQUEST['Progressive_Responses'];
$Meetings_Held = $_REQUEST['Meetings_Held'];
$WhatsApp_Sent = $_REQUEST['WhatsApp_Sent'];
$Sessions_Planned = $_REQUEST['Sessions_Planned'];
$Sessions_Held = $_REQUEST['Sessions_Held'];
$Centres_Planned = $_REQUEST['Centres_Planned'];

$sql = "INSERT INTO `record`(`Rename_Option`, `Leads_Generation`, `Emails_Sent`, `Calls_Made`, `Progressive_Responses`, `Meetings_Held`, `WhatsApp_Sent`, `Sessions_Planned`, `Sessions_Held`, `Centres_Planned`, `username`) 
VALUES ('$Rename_Option','$Leads_Generation','$Emails_Sent','$Calls_Made','$Progressive_Responses','$Meetings_Held','$WhatsApp_Sent','$Sessions_Planned','$Sessions_Held','$Centres_Planned','$username')";
$result = mysqli_query($conn ,$sql);
header("location:Untitled-1.php");
exit();
}

$sql = "SELECT * FROM `record`";
$results = mysqli_query($conn ,$sql);
 

?>