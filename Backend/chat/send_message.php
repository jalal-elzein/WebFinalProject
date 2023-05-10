<?php

session_start();

require_once("message.php");

if (isset($_POST["messageText"])) {
    echo "made it inside if";
    $message = new message();
    // replace with id from session
    $message->setuser_id($_SESSION["user_id"]);
    $message->setcontent($_POST["messageText"]);
    $message->insertMessage();
}

?>