<?php

session_start();

require_once("../database/db_functions.php");

$db = connectToDB();

$user_id = $_SESSION["user_id"];
$username = $_SESSION["username"];

$qry = "SELECT * FROM users WHERE id = $user_id";
$qry1 = $db->query($qry);
$qry2 = $qry1->fetch();

$email = $qry2["email"];
$first_name = $qry2["first_name"];
$last_name = $qry2["last_name"];
$birthdate = $qry2["birthdate"];
$phone = $qry2["phone"];
$twitter_link = $qry2["twitter_link"];
$instagram_link = $qry2["instagram_link"];
$facebook_link = $qry2["facebook_link"];

$info = array($username, $email, $first_name, $last_name, $phone, $birthdate, $twitter_link, $instagram_link, $facebook_link);

echo json_encode($info);

?>