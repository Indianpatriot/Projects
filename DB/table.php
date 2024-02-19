<?php

include("dbconna.php");

    $sql = "SHOW TABLES";
    $result = $conn->query($sql);
    
    // Check if there are tables
    if ($result->num_rows > 0) {
        // Fetch the result as an indexed array
        $tables = $result->fetch_all();
    
        // Print the list of tables
        echo "Tables in the database:<br>";
        foreach ($tables as $table) {
            echo $table[0] . "<br>";
        }
    } else {
        echo "No tables found in the database";
    }

// Close the connection
$conn->close();
?>
