<?php

require_once("../database/db_functions.php");

session_start();

$db = connectToDB();

// get all the questions
$questions_qry = "SELECT * FROM questions";
$questions_qry_res = $db->query($questions_qry);
$questions_res = $questions_qry_res->fetchAll();

// select a question at random 
$index = rand(0, $questions_qry_res->rowCount() - 1);
$question_text = $questions_res[$index]["text"];
$question_number = $questions_res[$index]["id"];


// get the answers
$answers_qry = "SELECT * FROM answers WHERE question_id = $question_number";
$answers_qry_res = $db->query($answers_qry);
$answers_res = $answers_qry_res->fetchAll();

// mark the correct answer 
$correct_answer_qry = "SELECT * FROM answers WHERE question_id = $question_number AND correct = 1";
$correct_answer_qry_res = $db->query($correct_answer_qry);
$correct_answer_res = $correct_answer_qry_res->fetch(); // should still be 1 row only
$correct_answer_id = $correct_answer_res["id"];

$data = array(
    'q' => array('text' => $question_text, 'number' => $question_number),
    'a' => $answers_res
);

header('Content-Type: application/json');
echo json_encode($data);
?>