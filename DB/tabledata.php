<?php

include("dbconn.php");

$teamID = $_SESSION["team_id"];
$sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
$teamname = mysqli_query($conn,$sql1);
$teamname = mysqli_fetch_object($teamname);
$query = "SELECT * FROM `$teamname->team_name`";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    // Fetch the result as an associative array
    $rows = mysqli_fetch_object($result);

    // Print the contents using print_r
    echo "<pre>";
    print_r($rows);
    echo "</pre>";
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>

