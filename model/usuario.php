<?php
require_once 'conexao.php';
require_once 'tarefa.php';

class Usuario{

    private $pdo;

    public function __construct(){
        $this->pdo = Conexao::conexao();
    }

    public function selecionar(String $senha, String $email):array{
        $pd = $this->pdo->prepare('SELECT nome, email FROM usuario where email = :email AND senha = :senha');
        $pd->bindParam(':email', $email);
        $pd->bindParam(':senha', $senha);
        $pd->execute();
        $p = $pd->fetch();
        return $p;
    }

    public function cadastrar(array $array){
        $pd = $this->pdo->prepare('SELECT count(email) AS total FROM usuario WHERE email = :email ');
        $pd->bindParam(":email", $array['email']);
        $pd->execute();
        $p = $pd->fetch();
        $count = $p['total'];
        if( $count == 0){
            $pd = $this->pdo->prepare('INSERT INTO usuario(nome, email, senha) 
            VALUES(:nome, :email, :senha)');
            $pd->bindParam(":nome", $array['nome']);
            $pd->bindParam(":email", $array['email']);
            $pd->bindParam(":senha", $array['password']);
            $pd->execute();
            $this->entrar(['email' => $array['email'], 'password'=>$array['password']]);
        }else{
            echo '--'.$count;
        }
    }

    public function entrar(array $array){
        $pd = $this->pdo->prepare('SELECT id, nome FROM usuario WHERE email = :email AND senha = :senha');
        $pd->bindParam('email', $array['email']);
        $pd->bindParam('senha', $array['password']);
        $pd->execute();
        $p = $pd->rowCount();
        if($p == 0){
            echo 'não encontrado';
        }else{
            $p = $pd->fetch();
            session_start();
            $_SESSION['usuario'] = ['nome'=>$p['nome'], 'id'=>$p['id']];
            $tarefa = new Tarefa();
            $tarefa->listarTarefa($p['id']);
        }
        
    }

}
