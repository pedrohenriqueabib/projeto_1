<?php
require_once '../model/usuario.php';
$metodo = $_SERVER['REQUEST_METHOD'];
$usuario = new Usuario();
if($metodo  == 'POST'){
    $funcao = $_POST['funcao'];
    $usuario->$funcao($_POST);
}else if( $metodo == 'GET'){
    $funcao = $_GET['funcao'];
    $usuario->$funcao($_GET);
}