function confirmAction(userId) {
    const response = confirm("Are you sure you want to do that?");

    if (response) {
        alert("Ok was pressed");
    } else {
        alert("Cancel was pressed");
    }

    // Send the response and user ID to a PHP script
    sendResponseToPHP(response, userId);
}

function sendResponseToPHP(response, userId) {
    // Create a new XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Define the PHP script URL where you want to send the data
    const phpScriptURL = "DB/process_response.php"; // Replace with your PHP script's URL

    // Prepare the data to send to PHP (you can use JSON.stringify for more complex data)
    const data = "response=" + response + "&userId=" + userId;

    // Configure the request
    xhr.open("POST", phpScriptURL, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define a callback function to handle the response from PHP
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // PHP script executed successfully, and we received a response
                console.log("PHP Response:", xhr.responseText);
                alert("PHP Response:\n" + xhr.responseText);
            } else {
                // Error handling in case the request to PHP fails
                console.error("Error: PHP request failed with status", xhr.status);
            }
        }
    };

    // Send the request to PHP
    xhr.send(data);
}
