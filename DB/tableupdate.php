<?php

include("dbconn.php");

    $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`) VALUES
    (10, 'Simran', 'Simran@gmail.com', '1234', 1),
    (11, 'subadmin1', 'admin@gmail.com', '1234', 2),
    (16, 'subadmin2', 'subadmin@gmai.com', '1234', 2),
    (18, 'kresha', 'kresha@gmail.com', '1234', 5),
    (19, 'mentor2', 'mentor@gmail.com', '1234', 3),
    (20, 'mentor3', 'mentor@gmail.com', '1234', 3),
    (21, 'mahati', 'mahati@gmail.com', '1234', 4),
    (22, 'paavni', 'paavni@gmail.com', '1234', 4),
    (23, 'member3', 'member@gmail.com', '1234', 4),
    (24, 'member4', 'member@gmail.com', '1234', 4),
    (25, 'member5', 'member@gmail.com', '1234', 4),
    (29, 'shahid', 'shahid@gmail.com', '1234', 5),
    (30, 'eva', 'eva@gmail.com', '1234', 4),
    (31, 'Tanishaa Gupta', 'Tanisha@gmail.com', '1234', 4),
    (32, 'Arka Dey', 'Arka@gmail.com', '1234', 4),
    (33, 'Aditya Choudhury', 'Aditya@gmail.com', '1234', 4),
    (34, 'Aayesha', 'Aayesha@gmail.com', '1234', 5),
    (35, 'Bono Jyoshna Biswal', 'Bono@gmail.com', '1234', 3),
    (36, 'aaaa', 'admin112@gmail.com', '1324', 5)";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
