<?php
// import database functions
require_once("../database/db_functions.php");

// start the session
session_start();

// connect tothe database
$db = connectToDB();

// get all the questions
$questions_qry = "SELECT * FROM questions";
$questions_qry_res = $db->query($questions_qry);
$questions_res = $questions_qry_res->fetchAll();

// select a question at random 
if (isset($_SESSION["my_questions"])) {
    $numbers = $_SESSION["my_questions"];
    $index = rand(0, $questions_qry_res->rowCount() - 1);
    
    // keep picking until we find one that's never been seen before 
    while (in_array($index, $numbers)) {
        $index = rand(0, $questions_qry_res->rowCount() - 1);
    }

    // add it to the seen array
    $numbers[] = $index;
    $_SESSION["my_questions"] = $numbers;
} else {
    
    // pick any question at random and mark it as seen
    $index = rand(0, $questions_qry_res->rowCount() - 1);
    $numbers = array();
    $numbers[] = $index;
    $_SESSION["my_questions"] = $numbers;
}

// get info about the chosen question
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

// prepare the question and answers to be sent
$data = array(
    'q' => array('text' => $question_text, 'number' => $question_number),
    'a' => $answers_res
);

// send the data to the frontend
header('Content-Type: application/json');
echo json_encode($data);

// jalal
?>