<?php 
    include '../controllers/runEditar.php';
    include '../controllers/editarAgendamento.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Clínica Veterinária</title>
</head>

<body>
    <div class="container">
        <img class="logo" src="" alt="">
        <?php 
            include '../controllers/mensagem.php'; 
        ?>
        <form action="../controllers/runEditar.php" method="POST">
            <fieldset>
                <label for="idade">Idade</label><br>
                <input type="number" id="idade" name="idade" value="<?php echo $consulta['idade']; ?>" required><br>
                <label for="data">Data</label><br>
                <input type="date" id="data" name="data" value="<?php echo $consulta['data']; ?>" required><br>
                <label for="hora">Hora</label><br>
                <input type="time" id="hora" name="hora" value="<?php echo $consulta['hora']; ?>" required><br>
                <label for="motivo">Motivo</label><br>
                <textarea id="motivo" name="motivo" rows="4" cols="50"><?php echo $consulta['motivo']; ?></textarea><br>
                <input type="hidden" name="id" value="<?php echo $consulta['id']; ?>">
                <div class="buttons">
                    <button class="botao" type="button"
                        onclick="window.location.href='consulta.php'">Voltar</button>
                    <input class="botao" type="submit" value="Editar">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>