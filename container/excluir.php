<?php

// Importa o arquivo do banco de dados
require_once '../classes/conexao.php';

// pega o id da url
$id = $_GET['id'];

// Armazena o valor de get Conection em uma variavel
$conexao = getConection();

//prepara a query para inserir no banco
$query = $conexao->prepare("DELETE FROM container WHERE id = :id");

// Substitui o :id pelo valor da variavel id
$query->bindParam(':id', $id);

//executa a query no banco substituindo os valores com : pelos valores do array $data
$query->execute();

header( 'Location: index.php' ) ;