<?php

// start the session
session_start();

// import the message class
require_once("message.php");

// receive the message from the frontend 
if (isset($_POST["messageText"])) {
    // make a new message object
    $message = new message();
    $message->setuser_id($_SESSION["user_id"]);
    $message->setcontent($_POST["messageText"]);
    // call the insert function
    $message->insertMessage();
}

// jalal
?>