<?php

// standard connection to database with pdo
// credentials are different when hosted
function connectToDB() {
    $dbhost = "127.0.0.1";
    $dbname = "mario_db";
    $dbuser = "root";
    $dbpass = "";
    $db = null;
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    } catch (Exception $e) {
        print("Error: ".$e->getMessage()."<br/>");
        die();
    }
    return $db;
}

// jalal
?>