<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Container</h1>
            <img  class="left-login-image" src="./ship.svg" alt="Container">
        </div>
        <div class="rigth-login">
            <div class="card-login">
                <h1>Cadastro</h1>
                <div class="textfield">
                    <form action="cadastra_no_banco.php" method="post">
                        <div class="textfield">
                        <label>Cliente</label>
                        <input type="text" name="cliente" placeholder="Nome do Cliente" />
                        </div>
                        <div class="textfield">
                        <label>Numero do Container</label>
                        <input type="text" name="numero_container" placeholder="4 letras e 7 números. Ex: TEST1234567e" />
                        </div>
                        <div class="selectfield">
                        <label>Tipo</label>
                        <select  name="tipo">
                            <option value="20">20</option>
                            <option value="40">40</option>
                        </select></div>
                        <div class="selectfield"><label>Status</label>
                        <select name="status">
                            <option value="Cheio">Cheio</option>
                            <option value="Vazio">Vazio</option>
                        </select></div>
                        <div class="selectfield"><label>Categoria</label>
                        <select name="categoria">
                            <option value="Importação">Importação</option>
                            <option value="Exportação">Exportação</option>
                        </select></div>
                        <button class="btn-login" type="submit" value="Cadastrar">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>