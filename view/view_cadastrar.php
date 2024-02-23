<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GerTarefas</title>
</head>
<body>
    <p>Cadastrar</p>
    <p><a href="../index.php">Retornar para a página inicial</a>
    <div class='formularioCadastro'>
        <form action="../controller/usuarioControle.php" method='POST'>
            <input type="hidden" name='funcao' value='cadastrar'>
            <label for="nome">Nome:</label><br>
            <input type="text" name='nome' id='nome'><br>
            <label for="email">Email:</label><br>
            <input type="email" name='email' id='email'><br>
            <label for="password">Senha:</label><br>
            <input type="password" name='password' id='password'><br>
            <div>
                <input type="submit" value='Cadastrar' id='cadastrar'>
                <input type="reset" value='Cancelar' id='cancelar'>
            </div>
        </form>
    </div>
</body>
</html>