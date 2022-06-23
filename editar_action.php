<?php 

require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome_time');
$tecnico = filter_input(INPUT_POST, 'nome_tecnico');
$capitao = filter_input(INPUT_POST, 'capitao');

if ($id && $nome && $tecnico && $capitao) {

    
    $sql = $pdo -> prepare ("UPDATE times_copa SET nome_time = :nome, nome_tecnico = :tecnico, capitao = :capitao WHERE id = :id" );
    $sql-> bindValue (':id', $id);
    $sql-> bindValue (':nome', $nome);
    $sql-> bindValue (':tecnico', $tecnico);
    $sql-> bindValue (':capitao', $capitao);
    

    $sql -> execute ();

    header ("Location: index.php");
}else {
    header ("Location: index.php");
    exit;
}