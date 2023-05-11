<?php

// start the session
session_start();

// import database functions
require_once("../database/db_functions.php");

// connect to db
$db = connectToDB();

// get user info
$user_id = $_SESSION["user_id"];
$username = $_SESSION["username"];

// get the row for the current user from the users table 
$qry = "SELECT * FROM users WHERE id = $user_id";
$qry1 = $db->query($qry);
$qry2 = $qry1->fetch();

// store variables
$email = $qry2["email"];
$first_name = $qry2["first_name"];
$last_name = $qry2["last_name"];
$birthdate = $qry2["birthdate"];
$phone = $qry2["phone"];
$twitter_link = $qry2["twitter_link"];
$instagram_link = $qry2["instagram_link"];
$facebook_link = $qry2["facebook_link"];

// store user info in an array
$info = array($username, $email, $first_name, $last_name, $phone, $birthdate, $twitter_link, $instagram_link, $facebook_link);

// encode the info array as a json string and send it to the frontend
echo json_encode($info);

// jalal
?>