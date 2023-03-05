<?php 
    session_start();
    $servername = "sql100.epizy.com";
    $username = "epiz_33438140";
    $password = "ro9bQspqjoNe";
    $database = "epiz_33438140_tutorial10_auth";

    $connection = new mysqli($servername, $username, $password, $database);

    if($connection -> connect_error) {
        die("Connection Failed" . $connection -> connect_error);
    }
?>