<?php

include("dbconn.php");

$query = "SELECT * FROM `central team simtrak`";
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

