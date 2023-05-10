<?php

session_start();

$user_id = $_SESSION["user_id"];

require_once("../database/db_functions.php");

$db = connectToDB();

// get the JSON data from the POST request
$new_info = $_POST['new_info'];

// // decode the JSON data into an associative array
$new_info_array = json_decode($new_info, true);

// access the data in the associative array
$first_name = $new_info_array['first_name'];
$last_name = $new_info_array['last_name'];
$email = $new_info_array['email'];
$phone = $new_info_array['phone'];
$birthdate = $new_info_array['birthdate'];

// $first_name = $_POST["first_name"];
// $last_name = $_POST["last_name"];
// $email = $_POST["email"];
// $phone = $_POST["phone"];
// $birthdate = $_POST["birthdate"];

$qry = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone', birthdate='$birthdate' WHERE id=$user_id;";

try {
    $db->exec($qry);
    $response = array('status' => 'success');
} catch (Exception $e) {
    $response = array('status' => 'failed', 'error' => $e->getMessage(), 'query' => $qry);
}

// send a response back to the frontend
echo json_encode($response);

?>