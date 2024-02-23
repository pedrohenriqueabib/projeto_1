<?php
require_once 'conexao.php';
session_start();

class Tarefa{
    private $pdo;

    public function __construct(){
        $this->pdo = Conexao::conexao();
    }

    public function listarTarefa(int $id):void{
        $pd = $this->pdo->prepare("SELECT id, nome, descricao, estado FROM tarefa WHERE id_usuario = :id_usuario");
        $pd->bindParam(':id_usuario', $id);
        $pd->execute();
        $p = $pd->fetchAll();
        $_SESSION['tarefa'] = $p;

        header('location: ../view/home.php');
    }

    public function cadastrarTarefa(){

    }

    public function concluirTarefa(array $array){
        $pd = $this->pdo->prepare("UPDATE tarefa SET estado = 1 WHERE id = :id");
        $pd->bindParam(':id', $array['id_tarefa']);
        $pd->execute();
        echo 'feito';

    }
}
