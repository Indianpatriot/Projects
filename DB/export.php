<?php
include("dbconn.php");
// Export data from database
$tables = array(); // Array to store table names

// Get all table names in the database
$result = $conn->query("SHOW TABLES");
while ($row = $result->fetch_row()) {
    $tables[] = $row[0];
}

// Loop through each table and export data
foreach ($tables as $table) {
    $filename = $table . '.csv'; // You can change this to .json or any other format

    // Open file for writing
    $file = fopen($filename, 'w');

    // Fetch data from the table
    $result = $conn->query("SELECT * FROM $table");

    // Write column names to the file
    $fields = $result->fetch_fields();
    $column_names = array();
    foreach ($fields as $field) {
        $column_names[] = $field->name;
    }
    fputcsv($file, $column_names);

    // Write data rows to the file
    while ($row = $result->fetch_assoc()) {
        fputcsv($file, $row);
    }

    // Close file
    fclose($file);
}

// Close connection
$conn->close();

echo "Database exported successfully.";
?>
