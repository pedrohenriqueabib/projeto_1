<?php
class Conexao{
    private static $pdo;
    public static function conexao(){
        self::$pdo = new PDO('mysql:host=localhost;dbname=gertarefas','root','');
        return self::$pdo;
    }
}
