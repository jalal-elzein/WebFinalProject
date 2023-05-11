<?php
// import databse functions
require_once("../database/db_functions.php");

// start the session
session_start();

// establish connection with the database
$db = connectToDB();

// decode the data received from the frontend 
$jsonData = json_decode(file_get_contents("php://input"), true);

// extract the "score" and "time" values from the json data
$score = $jsonData['score'];
$time = $jsonData['time'];

// get user information from the session
$username = $_SESSION["username"];
$user_id = $_SESSION["user_id"];

// insert score into the database
$ins_qry =  "INSERT INTO `game_scores` (`user_id`, `score`, `date`, `time`) VALUES ($user_id, $score, NOW(), $time);";
$db->exec($ins_qry);

// jalal
?>