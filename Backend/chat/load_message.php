<?php

// start the session
session_start();

// import the message class
require_once("message.php");

// instantiate a new message object
$message = new message();

// call the display message method to load the messages onto the sceen
$message->displayMessage();


// jalal
?>