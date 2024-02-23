<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GerTarefas</title>
</head>
<body>
    <p>Ainda não tem cadastro? <a href='./view/view_cadastrar.php'>Clique aqui</a></p>
    <div>
        <form action="./controller/usuarioControle.php">
            <input type='hidden' value='entrar' name='funcao'>
            <label for="email">Email:</label><br>
            <input type="email" name='email' id='email'><br>
            <label for="password">Senha:</label><br>
            <input type="password" name='password' id='password'>
            <div>
                <input type="submit" value='Entrar' id='entrar'>
                <input type="reset" value='Cancelar'>
            </div>
        </form>
    </div>
</body>
</html>