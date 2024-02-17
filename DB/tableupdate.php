
<?php

    include("dbconn.php");

    $sql = "INSERT `users` (`id`,`username`,`email`,`password`,`role_id`) VALUE('50','Priti Sinha','pvsinha991@gmail.com','June@220389','5')";
// pvsinha991@gmail.com   June@220389 Priti sinha
    if($conn->query($sql)){
        echo "done ok";
    }else{
        echo "not done" . $conn->error;
    }
   

// Close the connection
    $conn->close();

?>



