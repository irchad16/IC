
    <html>
    <head></head>
    <body>
        <form action="results.php" method="post">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br><br>
            <label for="email">Apelido:</label>
            <input type="text" name="apelido" required><br><br>
            <label >Alunos do ctesp de informatica? </label> <br>
            <input type="checkbox" name="aluno" checked></label>
            <br> <label>Idade:</label>
            <input type="radio" name="idade" value ="menor ou igual que 20" required> <br>
            <input type="radio" name="idade" value="21-30" required>21-30 <br>
            <input type="radio" name="idade" value="21-30" required>31-40 <br>
            <input type="radio" name="idade" value=">40" required> >40 <br>
            <label> Localidade:</label>
            <select name="localidade" required>
                <option value="Lisboa">Lisboa</option>
                <option value="Porto">Porto</option>
                <option value="Coimbra">Coimbra</option>
                <option value="Faro">Faro</option>
            </select><br><br>
            <label>Sugestões:</label><br>
            <textarea name="sugestoes" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Enviar">
            <input type="submit" value="Limpar">

        </form>
    </body>
    </html>
