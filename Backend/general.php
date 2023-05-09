<?php

function assertLogin() {
    if (!isset($_SESSION["username"])) {
        header("../index.php");
    }
}

?>