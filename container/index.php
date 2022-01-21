<?php require_once '../classes/conexao.php'; ?>
<?php 

    // Faz um select na tabela de container e pega todos os registros
    $registros = getConection()->query("select * from container")->fetchAll(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status container</title>
    <link rel="stylesheet" href="./estiloPrincipal.css">
</head>
<body>
    <div class="main-login">
    <div class="card-login">    
    <div>
        <h1>Status cadastro</h1>
        <h4><a class="botão" href="cadastro.php">Adicionar</a></h4>
    <table>
        <thead>
            <tr>
            <th>Id</th>
            <th>Cliente</th>
            <th>Conteiner</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($registros as $registroUnico) {  ?>
                <tr>
                    <td><?php echo $registroUnico['id']; ?></td>
                    <td><?php echo $registroUnico['cliente']; ?></td>
                    <td><?php echo $registroUnico['numero_container']; ?></td>
                    <td><?php echo $registroUnico['tipo']; ?></td>
                    <td><?php echo $registroUnico['status']; ?></td>
                    <td><?php echo $registroUnico['categoria']; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $registroUnico['id']; ?>" >
                            Editar 
                        </a>
                    </td>
                    <td>
                        <a href="excluir.php?id=<?php echo $registroUnico['id']; ?>" >
                            Excluir 
                        </a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>