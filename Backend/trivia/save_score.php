<?php
require_once("../database/db_functions.php");

session_start();

$db = connectToDB();

$data = $_POST["data"];

// echo $data;

// TODO: get this from the session
$user_id = 1;
$score = $data;

$ins_qry = "INSERT INTO `trivia_scores` (`user_id`, `score`, `date`) VALUES ($user_id, $score, NOW());";

$db->exec($ins_qry);

?>