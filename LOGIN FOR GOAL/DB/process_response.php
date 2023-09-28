<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the 'response' and 'userId' values from the POST data
    $response = isset($_POST["response"]) ? $_POST["response"] : null;
    $userId = isset($_POST["userId"]) ? $_POST["userId"] : null;

    // You can now use both $response and $userId in your PHP code
    include("dbconn.php");
    $user = "SELECT * FROM `role_teams` WHERE `user_id` = ".$_POST["userId"]."";
 //   $role = "SELECT * FROM `role_teams` WHERE user_id=$user_id and role_id =$role_id and team_id =$team_id";
    // For example, you can save them to a file, store them in a database, or perform other actions based on their values

    // Send a response back to the JavaScript
    echo "Received response: " . $response . ", User ID: " . $userId;
} else {
    // Handle invalid requests
    http_response_code(400);
    echo "Invalid request";
}
?>
