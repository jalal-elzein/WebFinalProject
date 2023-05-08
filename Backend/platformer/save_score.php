<?php
require_once("../database/db_functions.php");

session_start();

$db = connectToDB();

$jsonData = json_decode(file_get_contents("php://input"), true);

// Extract the "score" and "time" values from the JSON data
$score = $jsonData['score'];
$time = $jsonData['time'];

// TODO: get this from the session
$username = "jalal-elzein";
$user_id = 1;

$ins_qry =  "INSERT INTO `game_scores` (`user_id`, `score`, `date`, `time`) VALUES ($user_id, $score, NOW(), $time);";

$db->exec($ins_qry);

?>