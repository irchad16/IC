<?php
  //escrever a string de conexão
  $dsn = "mysql:host=localhost;dbname=torneio";
  //escrever o user e a senha
  $user = 'root';
  $pass = "";
  
?>
<h1> JOGADORES </h1>
<table border = "1">
    <tr>
        <th> NOME DO JOGADOR </th>
        <th> NACIONALIDADE </th>
    </tr>
    <?php
    //criar a conexão
    $con = new PDO($dsn, $user, $pass);
    //escrever a query
    $sql = "SELECT * FROM jogador";
    $resultados = $con->query($sql);
    //percorrer os resultados
    foreach($resultados->fetchALL()as $linha){
        echo "<tr>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['pais']."</td>";
        echo "</tr>";
    }
    ?>
</table>