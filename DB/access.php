<?php
    include("dbconn.php");
    if(isset($_GET["team_id"])){
        $user_id = $_SESSION["user_id"];
        $role_id = $_SESSION["role_id"];
        $team_id = $_GET["team_id"];
        $_SESSION["team_id"] = $_GET["team_id"];
        if($role_id == 1){
            header("Location:/Untitled-1.php");
            exit();
        }else{
            $sql = "SELECT * FROM `role_teams` WHERE user_id=$user_id and role_id =$role_id and team_id =$team_id";
            $result = mysqli_query($conn ,$sql);
            $row  = mysqli_fetch_array($result);
            if(is_array($row)) {
                header("Location:/goal%20managment%20system/Projects/LOGIN%20FOR%20GOAL/Untitled-1.php");
                exit();
                echo "ds";
            }else{
                if($role_id==3){
                    $_SESSION["invalid"] = "you are not a team manager";
                }else{
                    $_SESSION["invalid"] = "you are not a team member";
                }
                header("Location:/goal/Projects/LOGIN%20FOR%20GOAL/index.php");
                exit();
            }
        }
    }else{
        echo "not define";
    }
    echo "ds";
?>