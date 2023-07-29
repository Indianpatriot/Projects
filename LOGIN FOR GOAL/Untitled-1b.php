<?php
$conn = new mysqli("localhost","root","","goal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_REQUEST['Rename_Option'])){
$Rename_Option = $_REQUEST['Rename_Option'];
$Leads_Generation = $_REQUEST['Leads_Generation'];
$Emails_Sent = $_REQUEST['Emails_Sent'];

$sql = "INSERT INTO `record`(`Rename_Option`, `Leads_Generation`, `Emails_Sent`) VALUES ('$Rename_Option','$Leads_Generation','$Emails_Sent')";
$result = mysqli_query($conn ,$sql);
header("location:Untitled-1.php");
exit();
}

$sql = "SELECT * FROM `record`";
$result = mysqli_query($conn ,$sql);
 

?>