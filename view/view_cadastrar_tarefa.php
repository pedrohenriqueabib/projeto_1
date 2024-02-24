<?php
    session_start();
    // var_dump($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gertarefas</title>
</head>
<body>
    <div class="cadastrar_tarefa">
        <form action="../controller/tarefaControle.php" method='POST'>
            <input type="hidden" value='cadastrarTarefa' name='funcao'>
            <label for="nome">Nome:</label><br>
            <input type="text" name='nome'><br>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea><br>
            <div class="botoes">
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </div>
</body>
</html>