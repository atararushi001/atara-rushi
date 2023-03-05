<?php 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        include_once("../config.php");

        $sql = "DELETE FROM students WHERE student_id = $id";
        $result = $connection -> query($sql);
    }

    header("Location: ../index.php");
    exit;
?>