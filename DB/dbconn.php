<?php
    session_start();
    $conn = new mysqli("localhost","root","","goal");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $usertype = "SELECT * FROM `roles`";
    $usertype = mysqli_query($conn,$usertype);
    $membertype = array();
    $i=1;
    while($val = mysqli_fetch_object($usertype)){
        $membertype[$i] = $val->role_name;
        $i++;
    }
?>