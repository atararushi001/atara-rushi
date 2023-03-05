<?php 
    include_once("../config.php");

    $_SESSION = [];
    session_unset();
    session_destroy();
    $connection -> close();
    header("Location: login.php");
    exit;
?>