<?php
    session_start();
    $_SESSION['username'] = $_POST['nome'];
    echo "Bem-vindo, " . $_SESSION['username'] . "! Você está logado.";
?>
<html>
    <head></head>
    <body>
        <a href="logout.php">Logout</a>
    </body>