function confirmAction(userId, roleId, teamID) {
    const response = confirm("Are you sure you want to do that?");
    
    if (response) {
        alert("Ok was pressed");
        // Send the response, user ID, roleId, and teamID to a PHP script
        sendResponseToPHP(response, userId, roleId, teamID);
    } else {
        alert("Cancel was pressed");
    }
    
    
   
}

function sendResponseToPHP(response, userId, roleId, teamID) {
    // Create a new XMLHttpRequest object
    const xhr = new XMLHttpRequest();
    
    // Define the PHP script URL where you want to send the data
    const phpScriptURL = "DB/process_response.php"; // Replace with your PHP script's URL
    
    // Prepare the data to send to PHP (you can use JSON.stringify for more complex data)
    const data = "response=" + response + "&userId=" + userId + "&roleId=" + roleId + "&teamId=" + teamID;
    
    // Configure the request
    xhr.open("POST", phpScriptURL, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    // Define a callback function to handle the response from PHP
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            alert("PHP Response:\n" + xhr.responseText);
            if (xhr.status === 200) {
                // PHP script executed successfully, and we received a response
                console.log("PHP Response:", xhr.responseText);                
                alert("PHP Response:\n" + xhr.responseText);
            } else {
                alert("PHP Response:\n" + xhr.responseText);
                // Handle specific HTTP error statuses
                if (xhr.status === 400) {
                    console.error("Error: Bad Request - Invalid data sent to the server.");
                } else if (xhr.status === 500) {
                    console.error("Error: Internal Server Error - Something went wrong on the server.");
                } else {
                    console.error("Error: Unexpected status code - " + xhr.status);
                }
            }
        }
    };
    
    // Send the request to PHP
    xhr.send(data);
}
