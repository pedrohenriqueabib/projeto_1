<?php
session_start();
$usuario = $_SESSION['usuario'];
$tarefa = $_SESSION['tarefa'];
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
        <p>Minhas Tarefas:</p>
        <table>
            <tr>
                <th>Nome</th><th>Descrição</th><th>Estado</th><th>Ação</th>
            </tr>
                <?php
                foreach ($tarefa as $valor) {
                    // if($valor['estado'] == 1){
                    //     $estado = 'concluído';
                    // }else{
                    //     $estado = 'em aberto';
                    // }              
                    echo "<tr>
                            <td>".$valor['nome']."</td>
                            <td>".$valor['descricao']."</td>
                            <td>".$valor['estado']."</td>
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