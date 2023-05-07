<?php

session_start();

require_once("message.php");

$message = new message();

$message->displayMessage();

?>