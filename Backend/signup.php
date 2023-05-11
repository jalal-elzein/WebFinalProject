<?php
session_start();

// $user_id = $_SESSION["user_id"];

require_once("database/db_functions.php");

$db = connectToDB();

$data = $_POST["data"];

$new_info_array = json_decode($data, true);

$first_name = $new_info_array["fn"];
$last_name = $new_info_array["ln"];
$email = $new_info_array["email"];
$username = $new_info_array["username"];
$pass = $new_info_array["pass"];

// Insert user into database
$check_query = "SELECT * FROM users WHERE username='$username';";
$check_result = $db->query($check_query);

if ($check_result->rowCount() > 0) {
    // make response code 0 
    $response = array('status' => '0');
} else {
    // Insert user into database
    $sql = "INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('$email', '$username', '$pass', '$first_name', '$last_name');";
    try {
        $db->exec($sql);
        $response = array('status' => '1');
    } catch (Exception $e) {
        // make response  2
        $response = array('status' => '2');
    }
}
// send a response back to the frontend
echo json_encode($response);

// jalal and rayane
?>