<?php

include("dbconn.php");

    $sql = "-- phpMyAdmin SQL Dump
    -- version 5.2.1
    -- https://www.phpmyadmin.net/
    --
    -- Host: 127.0.0.1
    -- Generation Time: Nov 30, 2023 at 07:01 PM
    -- Server version: 10.4.28-MariaDB
    -- PHP Version: 8.2.4
    
    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    START TRANSACTION;
    SET time_zone = "+00:00";
    
    
    /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
    /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
    /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
    /*!40101 SET NAMES utf8mb4 */;
    
    --
    -- Database: `goal`
    --
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `central team simtrak`
    --
    
    CREATE TABLE `central team simtrak` (
      `ID` int(10) NOT NULL,
      `Member ID` int(10) NOT NULL,
      `Member Name` varchar(50) NOT NULL,
      `Date` date NOT NULL DEFAULT current_timestamp(),
      `New tasks received` int(10) NOT NULL,
      `Tasks in progress` int(10) NOT NULL,
      `Continuous tasks` int(10) NOT NULL,
      `Tasks completed today` int(10) NOT NULL,
      `Article recieved` int(50) DEFAULT NULL,
      `Cities initiated` varchar(50) DEFAULT NULL,
      `Cities started` varchar(50) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `central team simtrak`
    --
    
    INSERT INTO `central team simtrak` (`ID`, `Member ID`, `Member Name`, `Date`, `New tasks received`, `Tasks in progress`, `Continuous tasks`, `Tasks completed today`, `Article recieved`, `Cities initiated`, `Cities started`) VALUES
    (13, 0, '', '2023-09-25', 1, 2, 3, 4, NULL, NULL, NULL),
    (19, 21, 'mahati', '2023-10-11', 5, 4, 0, 3, 5, NULL, NULL);
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `city of joy`
    --
    
    CREATE TABLE `city of joy` (
      `ID` int(10) NOT NULL,
      `Member ID` int(10) NOT NULL,
      `Member Name` varchar(50) NOT NULL,
      `Date` date NOT NULL,
      `leads` int(50) DEFAULT NULL,
      `Cities ongoing` varchar(50) DEFAULT NULL,
      `cities started` varchar(50) DEFAULT NULL,
      `Centres` varchar(50) DEFAULT NULL,
      `Sessions` varchar(50) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `city of joy`
    --
    
    INSERT INTO `city of joy` (`ID`, `Member ID`, `Member Name`, `Date`, `leads`, `Cities ongoing`, `cities started`, `Centres`, `Sessions`) VALUES
    (1, 31, 'Tanishaa Gupta', '0000-00-00', 454, '455', '22', '44', '55'),
    (2, 35, 'Bono Jyoshna Biswal', '0000-00-00', 33, '66', 'HHKS', '77', '22');
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `echo`
    --
    
    CREATE TABLE `echo` (
      `ID` int(10) NOT NULL,
      `Member ID` int(10) NOT NULL,
      `Member Name` varchar(50) NOT NULL,
      `Date` date NOT NULL DEFAULT current_timestamp(),
      `LSeT Website` varchar(50) NOT NULL,
      `ADORE Website` varchar(50) NOT NULL,
      `Simtrak Website` varchar(50) NOT NULL,
      `ASCEND website` varchar(50) NOT NULL,
      `Weeho Portal` varchar(50) NOT NULL,
      `Foreword website` varchar(50) NOT NULL,
      `Goal Management System` varchar(50) NOT NULL,
      `Weeho App` varchar(50) NOT NULL,
      `Simtrak app` varchar(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `echo`
    --
    
    INSERT INTO `echo` (`ID`, `Member ID`, `Member Name`, `Date`, `LSeT Website`, `ADORE Website`, `Simtrak Website`, `ASCEND website`, `Weeho Portal`, `Foreword website`, `Goal Management System`, `Weeho App`, `Simtrak app`) VALUES
    (8, 0, 'hgjg', '0000-00-00', 'hgjg', 'hgjg', 'hgjg', 'hgjg', 'hgjg', 'hgjg', '', '', ''),
    (9, 0, '', '2023-09-25', '12', '12', '121', '21', '21', '21', '2', '12', '12');
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `gd1`
    --
    
    CREATE TABLE `gd1` (
      `ID` int(10) NOT NULL,
      `Member ID` int(10) NOT NULL,
      `Member Name` varchar(50) NOT NULL,
      `Date` int(10) NOT NULL,
      `ADORE` varchar(50) NOT NULL,
      `Foreword` varchar(50) NOT NULL,
      `Sawec` varchar(50) NOT NULL,
      `Others` varchar(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `goal_parameter`
    --
    
    CREATE TABLE `goal_parameter` (
      `parameter_id` int(10) NOT NULL,
      `team_id` int(10) NOT NULL,
      `parameter` varchar(50) NOT NULL,
      `parameter_data_type` varchar(50) NOT NULL,
       PRIMARY KEY (`parameter_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `goal_parameter`
    --
    
    INSERT INTO `goal_parameter` (`parameter_id`, `team_id`, `parameter`, `parameter_data_type`) VALUES
    (1, 6, 'leads', 'INT'),
    (2, 0, 'Date', 'text'),
    (10, 2, 'Date', 'varchar'),
    (11, 0, 'Member Name', '50'),
    (23, 1, 'New tasks received', 'text'),
    (24, 1, 'Tasks in progress', 'text'),
    (25, 1, 'Continuous tasks', 'text'),
    (26, 1, 'Tasks completed today', 'text'),
    (27, 2, 'LSeT Website', 'text'),
    (28, 2, 'ADORE Website', 'text'),
    (29, 2, 'Simtrak Website', 'text'),
    (30, 2, 'ASCEND website', 'text'),
    (31, 2, 'Weeho Portal', 'text'),
    (32, 2, 'Foreword website', 'text'),
    (33, 2, 'Goal Management System', 'text'),
    (34, 2, 'Weeho App', 'text'),
    (35, 2, 'Simtrak app', 'text'),
    (36, 3, 'Leads', 'text'),
    (37, 3, 'Non lset form filled', 'text'),
    (38, 3, 'Forms filled', 'text'),
    (39, 3, 'Screening', 'text'),
    (40, 3, 'Final Int', 'text'),
    (41, 3, 'Selected', 'text'),
    (42, 3, 'Joining', 'text'),
    (43, 4, 'ADORE', 'text'),
    (44, 4, 'Foreword', 'text'),
    (45, 4, 'Sawec', 'text'),
    (46, 4, 'Others', 'text'),
    (47, 5, 'Leads', 'text'),
    (48, 5, 'Domain', 'text'),
    (49, 5, 'Int Sch', 'text'),
    (50, 5, 'Int con.', 'text'),
    (51, 5, 'Selected', 'text'),
    (52, 5, 'Orientation', 'text'),
    (53, 5, 'Joined', 'text'),
    (58, 1, 'Article recieved', 'INT'),
    (59, 1, 'Cities started', 'VARCHAR'),
    (60, 6, 'Cities ongoing', 'VARCHAR'),
    (61, 6, 'cities started', 'VARCHAR'),
    (62, 6, 'Centres', 'VARCHAR'),
    (63, 6, 'Sessions', 'VARCHAR');
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `lset plan`
    --
    
    CREATE TABLE `lset plan` (
      `ID` int(10) NOT NULL,
      `Member ID` int(10) NOT NULL,
      `Member Name` varchar(50) NOT NULL,
      `Date` int(10) NOT NULL,
      `Leads` int(10) NOT NULL,
      `Non lset form filled` int(10) NOT NULL,
      `Forms filled` int(10) NOT NULL,
      `Screening` int(10) NOT NULL,
      `Final Int` int(10) NOT NULL,
      `Selected` int(10) NOT NULL,
      `Joining` int(10) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `lset plan`
    --
    
    INSERT INTO `lset plan` (`ID`, `Member ID`, `Member Name`, `Date`, `Leads`, `Non lset form filled`, `Forms filled`, `Screening`, `Final Int`, `Selected`, `Joining`) VALUES
    (1, 0, '', 0, 45, 45, 45, 45, 45, 4, 54);
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `record`
    --
    
    CREATE TABLE `record` (
      `ID_Number` int(10) NOT NULL,
      `Name` varchar(50) NOT NULL,
      `Month` varchar(50) NOT NULL,
      `Lead_max` varchar(10) NOT NULL,
      `Leads Generated` varchar(50) DEFAULT NULL,
      `progressive_max` varchar(10) NOT NULL,
      `Progressive` varchar(50) NOT NULL,
      `Session goals` varchar(50) NOT NULL,
      `Sales` varchar(50) NOT NULL,
      `Centres spoken to` varchar(50) NOT NULL,
      `Centres called` varchar(50) NOT NULL,
      `Centre emails` varchar(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `record`
    --
    
    INSERT INTO `record` (`ID_Number`, `Name`, `Month`, `Lead_max`, `Leads Generated`, `progressive_max`, `Progressive`, `Session goals`, `Sales`, `Centres spoken to`, `Centres called`, `Centre emails`) VALUES
    (32, 'ffwe', 'fefew', '', '2', '', '1', '1', '1', '1', '1', '1');
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `roles`
    --
    
    CREATE TABLE `roles` (
      `id` int(11) NOT NULL,
      `role_name` varchar(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `roles`
    --
    
    INSERT INTO `roles` (`id`, `role_name`) VALUES
    (1, 'Admin'),
    (2, 'Subadmin'),
    (3, 'Manager'),
    (4, 'Member'),
    (5, 'noramal user');
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `role_teams`
    --
    
    CREATE TABLE `role_teams` (
      `user_id` int(10) NOT NULL,
      `role_id` int(11) DEFAULT NULL,
      `team_id` int(11) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `role_teams`
    --
    
    INSERT INTO `role_teams` (`user_id`, `role_id`, `team_id`) VALUES
    (10, 1, -1),
    (11, 2, 1),
    (11, 2, 2),
    (16, 2, 3),
    (18, 5, 0),
    (19, 3, 2),
    (20, 3, 3),
    (21, 4, 1),
    (22, 4, 1),
    (23, 4, 2),
    (24, 4, 2),
    (25, 4, 3),
    (29, 5, 0),
    (30, 4, 1),
    (31, 4, 6),
    (32, 4, 6),
    (33, 4, 6),
    (34, 5, 0),
    (35, 3, 6),
    (36, 5, 0);
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `simtrak recuitment`
    --
    
    CREATE TABLE `simtrak recuitment` (
      `ID` int(10) NOT NULL,
      `Member ID` int(10) NOT NULL,
      `Member Name` varchar(50) NOT NULL,
      `Date` date NOT NULL DEFAULT current_timestamp(),
      `Leads` varchar(50) NOT NULL,
      `Domain` varchar(50) NOT NULL,
      `Int Sch` varchar(50) NOT NULL,
      `Int con.` varchar(50) NOT NULL,
      `Selected` varchar(50) NOT NULL,
      `Orientation` varchar(50) NOT NULL,
      `Joined` varchar(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `teams`
    --
    
    CREATE TABLE `teams` (
      `id` int(11) NOT NULL,
      `team_name` varchar(50) NOT NULL,
      `team_domain` varchar(50) NOT NULL,
      `Status` varchar(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `teams`
    --
    
    INSERT INTO `teams` (`id`, `team_name`, `team_domain`, `Status`) VALUES
    (1, 'Central team simtrak', 'domain1', 'Active'),
    (2, 'Echo', 'domain2', 'Active'),
    (3, 'LSet plan', 'domain3', 'Active'),
    (4, 'GD1', 'domain4', 'Active'),
    (5, 'Simtrak Recuitment', 'domain5', 'Active'),
    (6, 'City of joy', 'domain6', 'Active');
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `users`
    --
    
    CREATE TABLE `users` (
      `id` int(10) NOT NULL,
      `username` varchar(50) DEFAULT NULL,
      `email` varchar(50) DEFAULT NULL,
      `password` varchar(20) DEFAULT NULL,
      `role_id` int(10) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `users`
    --
    
    INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`) VALUES
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
    (36, 'aaaa', 'admin112@gmail.com', '1324', 5);
    
    --
    -- Indexes for dumped tables
    --
    
    --
    -- Indexes for table `central team simtrak`
    --
    ALTER TABLE `central team simtrak`
      ADD PRIMARY KEY (`ID`);
    
    --
    -- Indexes for table `city of joy`
    --
    ALTER TABLE `city of joy`
      ADD PRIMARY KEY (`ID`);
    
    --
    -- Indexes for table `echo`
    --
    ALTER TABLE `echo`
      ADD PRIMARY KEY (`ID`);
    
    --
    -- Indexes for table `gd1`
    --
    ALTER TABLE `gd1`
      ADD PRIMARY KEY (`ID`);
    
    --
    -- Indexes for table `goal_parameter`
    --
    ALTER TABLE `goal_parameter`
      ADD PRIMARY KEY (`parameter_id`);
    
    --
    -- Indexes for table `lset plan`
    --
    ALTER TABLE `lset plan`
      ADD PRIMARY KEY (`ID`);
    
    --
    -- Indexes for table `record`
    --
    ALTER TABLE `record`
      ADD PRIMARY KEY (`ID_Number`);
    
    --
    -- Indexes for table `roles`
    --
    ALTER TABLE `roles`
      ADD PRIMARY KEY (`id`);
    
    --
    -- Indexes for table `simtrak recuitment`
    --
    ALTER TABLE `simtrak recuitment`
      ADD PRIMARY KEY (`ID`);
    
    --
    -- Indexes for table `teams`
    --
    ALTER TABLE `teams`
      ADD PRIMARY KEY (`id`);
    
    --
    -- Indexes for table `users`
    --
    ALTER TABLE `users`
      ADD PRIMARY KEY (`id`);
    
    --
    -- AUTO_INCREMENT for dumped tables
    --
    
    --
    -- AUTO_INCREMENT for table `central team simtrak`
    --
    ALTER TABLE `central team simtrak`
      MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
    
    --
    -- AUTO_INCREMENT for table `city of joy`
    --
    ALTER TABLE `city of joy`
      MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
    
    --
    -- AUTO_INCREMENT for table `echo`
    --
    ALTER TABLE `echo`
      MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
    
    --
    -- AUTO_INCREMENT for table `gd1`
    --
    ALTER TABLE `gd1`
      MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
    
    --
    -- AUTO_INCREMENT for table `lset plan`
    --
    ALTER TABLE `lset plan`
      MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
    
    --
    -- AUTO_INCREMENT for table `record`
    --
    ALTER TABLE `record`
      MODIFY `ID_Number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
    
    --
    -- AUTO_INCREMENT for table `simtrak recuitment`
    --
    ALTER TABLE `simtrak recuitment`
      MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
    
    --
    -- AUTO_INCREMENT for table `users`
    --
    ALTER TABLE `users`
      MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
    COMMIT;
    
    /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
    /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
    /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
    ";

    if($conn->query($sql)){
        echo "done";
    }else{
        echo "not done";
    }
   

// Close the connection
$conn->close();
?>
