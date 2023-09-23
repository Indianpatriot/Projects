<?php
// Simulated subcategory data - you would replace this with data from your server or another source
$subcategories = array();

if ($_GET["category"] == "1") {
    $subcategories[] = array("id" => 1, "name" => "Mentor1");
} elseif ($_GET["category"] == "2") {
    $subcategories[] = array("id" => 3, "name" => "Mentor2");
} elseif ($_GET["category"] == "3") {
    $subcategories[] = array("id" => 5, "name" => "Mentor3");
}

// Return the subcategory data as JSON
header('Content-Type: application/json');
echo json_encode($subcategories);
?>
