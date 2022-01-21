<?php

// Importa o arquivo do banco de dados
require_once '../classes/conexao.php';

// pega todos os dados do post
$data = $_POST;

// exibir os dados do post;
var_dump($data);

// Armazena o valor de get Conection em uma variavel
$conexao = getConection();

//prepara a query para inserir no banco
$query = $conexao->prepare("INSERT INTO 
    `container`(`cliente`, `numero_container`, `tipo`, `status`, `categoria`)
    values(:cliente,:numero_container,:tipo,:status,:categoria)
    ");

//executa a query no banco substituindo os valores com : pelos valores do array $data
$query->execute($data);

header( 'Location: index.php' ) ;