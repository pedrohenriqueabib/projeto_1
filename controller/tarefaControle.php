<?php
require_once '../model/tarefa.php';
$metodo = $_SERVER['REQUEST_METHOD'];
$tarefa = new Tarefa();
if($metodo == 'POST'){
    $funcao = $_POST['funcao'];
    $tarefa->$funcao($_POST);
}else if($metodo == 'GET'){

}