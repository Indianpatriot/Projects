<?php

    include("dbconn.php");

    $sql = "SELECT * FROM `teams`";
    $results = mysqli_query($conn ,$sql);
?>