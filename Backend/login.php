<?php
	require_once("database/db_functions.php");
	$db = connectToDB();
	
	// receive values from form submission
	$username = $_POST["username"];
	$password = $_POST["password"];

	// query the database for a username with the provided credentials
	$query = "SELECT id FROM users WHERE username = '".$username."' AND password = '".$password."';";
	$result = $db->query($query);
	
	// if # records == 1: login and start session etc
	$resrows = $result->rowCount();
	if ($resrows == 1) {
		session_start();
		$_SESSION["username"] = $username;
		$_SESSION["user_id"] = $result->fetch()["id"];
		header("location:../Pages/homie.php");
	}
	// else send error
	else {
		session_start();
		$_SESSION["login_status"] = 0;
		header("location:../index.php");
	}

// jalal and rayane
?>