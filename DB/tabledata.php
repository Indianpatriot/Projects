<?php

include("dbconn.php");

$query = "SELECT * FROM `simtrak recuitment`";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    // Fetch the result as an associative array
    $rows = $result->fetch_all(MYSQLI_ASSOC);

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

