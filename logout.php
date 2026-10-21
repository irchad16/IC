<?php
    session_start();
    session_destroy();
    header("Location: ex1ficha7.php");
    exit();
?>