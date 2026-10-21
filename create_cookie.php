<?php
    if (isset($_POST['cor'])) {
        setcookie("cordefundo", $_POST['cor'], time() + 120 ); 
    }
?>

<html>
    <head></head>
    <body>
        <h3>Cookie criado com sucesso!</h3>
        <a href="ex1ficha6.php">Voltar ao formulario</a>
    </body>
</html>