<?php

include("dbconn.php");
    
    // Fetch the list of tables from the information schema
$sql = "SHOW TABLES";
$result = $conn->query($sql);
$teamID = $_SESSION["team_id"];
echo $teamID;
$sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
$teamname = mysqli_query($conn,$sql1);
$teamname = mysqli_fetch_object($teamname);
// Check if there are tables
echo $teamname->team_name;
$columnsSql = "SHOW COLUMNS FROM ".$teamname->team_name;
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
