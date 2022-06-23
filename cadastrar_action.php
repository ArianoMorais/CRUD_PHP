<?php 

require 'config.php';


$nome = filter_input(INPUT_POST, 'nome_time' );
$tecnico = filter_input(INPUT_POST, 'nome_tecnico' );
$capitao = filter_input(INPUT_POST, 'capitao' );


$sql = $pdo->prepare("INSERT INTO times_copa (nome_time,nome_tecnico, capitao) VALUES (:nome_time, :nome_tecnico, :capitao)");

$sql -> bindValue(':nome_time', $nome); 
$sql -> bindValue(':nome_tecnico', $tecnico); 
$sql -> bindValue(':capitao', $capitao); 

$sql ->execute();

header ("location: index.php");