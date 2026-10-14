<?php
    echo "Formulário enviado com sucesso!";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p><strong>Nome:</strong> " . $_POST['nome'] . "</p>";
        echo "<p><strong>Apelido:</strong> " . $_POST['idade'] . "</p>";
        echo "<p><strong>Apelido:</strong> " . $_POST['localidade'] . "</p>";
        $tmp_name = $_FILES['cv']['tmp_name'];
        $cv_name = $_FILES['cv']['name'];
        $pasta = 'uploads/';
        if(!is_dir($pasta)) {
            mkdir($pasta);
            echo "Pasta 'uploads' criada com sucesso!";
        }
        move_uploaded_file($tmp_name, "uploads/" . $cv_name);

        
   
    }
?>