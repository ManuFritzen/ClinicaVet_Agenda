<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/favicon.ico">
    <title>Clínica Veterinária</title>
</head>

<body>
    <div class="container">
        <img class="logo" src="../img/file.png" alt="">
        <?php 
            include '../controllers/mensagem.php'; 
        ?>
        <form action="../controllers/runCadastro.php" method="POST">
            <fieldset>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
                
                <div class="buttons">
                    <button type="button" class="botao" onclick="window.location.href='../index.php'">Voltar</button>
                    <input class="botao" type="submit" value="Cadastrar">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>
