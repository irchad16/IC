<?php
    session_start();
    if (!isset($_SESSION['visitas'])) {
        $_SESSION['visitas'] = 0;
    }
    $_SESSION['visitas']++;
    $menssagem = "Esta é a sua visita número ".$_SESSION['visitas'];
?>
<html>
    <head></head>
    <body>
        <h3>contador de visitas</h3>
        <p><?php echo $menssagem; ?></p>
    </body>
</html>