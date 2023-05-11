<?php

// start the session
session_start();

// get user info from session
$user_id = $_SESSION["user_id"];

// import database functions
require_once("../database/db_functions.php");

// connect to the database
$db = connectToDB();

// get the json data from the POST request
$new_info = $_POST['new_info'];

// decode the json data
$new_info_array = json_decode($new_info, true);

// access the data
$first_name = $new_info_array['first_name'];
$last_name = $new_info_array['last_name'];
$email = $new_info_array['email'];
$phone = $new_info_array['phone'];
$birthdate = $new_info_array['birthdate'];

// update the user's info in the users table and return a message to indicate success or failure
$qry = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone', birthdate='$birthdate' WHERE id=$user_id;";
try {
    $db->exec($qry);
    $response = array('status' => 'success');
} catch (Exception $e) {
    $response = array('status' => 'failed', 'error' => $e->getMessage(), 'query' => $qry);
}

// send a response back to the frontend
echo json_encode($response);

// jalal
?>