<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/favicon.ico">
    <title>Clínica Veterinária</title>
</head>

<body>
    <div class="container">
        <img class="logo" src="img/file.png" alt="">
        <div>
            <?php 
                include 'controllers/mensagem.php'; 
            ?>
        </div>
        <form action="controllers/runLogin.php" method="POST">
            <fieldset>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="senha">Senha</label><br>
                <input type="password" id="senha" name="senha" required><br>
                <input class="botao" type="submit" value="Acessar o sistema">
            </fieldset>
        </form>
        <a class="novoCadastro" href="pages/cadastro.php">Cadastrar novo usuário</a>
    </div>
</body>

</html>
