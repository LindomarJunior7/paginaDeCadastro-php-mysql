<?php

// Importa o arquivo do banco de dados
require_once '../classes/conexao.php';

// pega todos os dados do post
$data = $_POST;

// exibir os dados do post;
var_dump($data);

// Armazena o valor de get Conection em uma variavel
$conexao = getConection();

//prepara a query para atualizar no banco
$query = $conexao->prepare("UPDATE  
    `container`set cliente = :cliente, numero_container = :numero_container,
        tipo = :tipo, status = :status, categoria= :categoria where id = :id
    ");


//executa a query no banco substituindo os valores com : pelos valores do array $data
$query->execute($data);

header( 'Location: index.php' ) ;