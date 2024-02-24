<?php
session_start();
$usuario = $_SESSION['usuario'];
$tarefa = $_SESSION['tarefa'];

// var_dump($usuario);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Gertarefas</title>
</head>
<body>
    <div class="minhaTarefas">
        <p>Minhas Tarefas:</p><a href='view_cadastrar_tarefa.php'>Cadastrar tarefa</a>
        <table>
            <tr>
                <th>Nome</th><th>Descrição</th><th>Concluído</th><th>Ação</th>
            </tr>
                <?php
                foreach ($tarefa as $valor) {
                    if($valor['estado'] == 1){
                        $estado = 'sim';
                    }else{
                        $estado = 'não';
                    }
                    echo "<tr>
                            <td>".$valor['nome']."</td>
                            <td>".$valor['descricao']."</td>
                            <td>".$estado."</td>
                            <td>
                                <form action='../controller/tarefaControle.php' method='POST'>
                                    <input type='hidden' value='concluirTarefa' name='funcao'>
                                    <input type='hidden' value='".$valor['id']."' name='id_tarefa'>
                                    <input type='submit' value='Concluir'>
                                </form>
                            </td>
                        </tr>";
                }
                ?>
        </table>
    </div>
</body>
</html>