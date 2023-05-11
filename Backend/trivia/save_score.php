<?php
// import database functions
require_once("../database/db_functions.php");

// start the session
session_start();

// get user info
$user_id = $_SESSION["user_id"];

// connect to the database
$db = connectToDB();

// receive the data from the frontend through post request
$score = $_POST["data"];

// insert the new score into the database
$ins_qry = "INSERT INTO `trivia_scores` (`user_id`, `score`, `date`) VALUES ($user_id, $score, NOW());";
$db->exec($ins_qry);

// jalal
?>