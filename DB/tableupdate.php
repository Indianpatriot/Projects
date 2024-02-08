
<?php

    include("dbcon.php");

    $sql = "INSERT INTO `users` (`username`, `email`, `password`, `role_id`) VALUES ('Simran shrama', 'Simran.adoreindia@gmail.com', 'SimranAdore', '1')";

    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



