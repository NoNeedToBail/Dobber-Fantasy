<?php

require_once('../library/conn.php');


$playerID = $_GET["playerID"];
$teamID = $_GET["teamID"];

$con = conn::getDB();
$playerAssignInsert = "DELETE FROM player_assignments  where playerID=" . $playerID . " and teamId=" . $teamID ;

$result = mysqli_query($con, $playerAssignInsert);

error_log($playerAssignInsert);

if ($result) {
    header("location: ../web/viewTeam.php", true, 303);
} else {
    header("location: ../web/viewTeam.php?error=true", true, 303);
}

