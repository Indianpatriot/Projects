<?php

include("dbconna.php");
    
    // Fetch the list of tables from the information schema
$sql = "SHOW TABLES";
$result = $conn->query($sql);

// Check if there are tables
$columnsSql = "SHOW COLUMNS FROM `Jupiter`";
        $columnsResult = $conn->query($columnsSql);

        if ($columnsResult->num_rows > 0) {
            // Fetch the result as an associative array
            $columns = $columnsResult->fetch_all(MYSQLI_ASSOC);

            // Print the list of column names and data types
            echo "Columns, Data Types, and Attributes:<br>";
            foreach ($columns as $column) {
                echo $column['Field'] . " - " . $column['Type'];

                // Check for AUTO_INCREMENT and primary key
                if (strpos($column['Extra'], 'auto_increment') !== false) {
                    echo " - AUTO_INCREMENT";
                }
                if ($column['Key'] === 'PRI') {
                    echo " - Primary Key";
                }

                echo "<br>";
            }
        } else {
            echo "No columns found for table $tableName";
        }



// Close the connection
$conn->close();
?>
