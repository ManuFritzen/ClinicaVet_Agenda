<?php
    include '../controllers/runConsultas.php';
    include '../controllers/renderConsulta.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="../css/styles.css">
    <title>Clínica Veterinária</title>
</head>

<body>
    <div class="container" style="width: 90vw; margin-bottom: 45px;">
        <img class="logo" src="../img/file.png" alt="">
        <div>
            <h1 class="title">Consultas Agendadas</h1>
            <div>
                <?php
            
                    echo $consultaContent;
        
                ?>
            </div>
        </div>
        <div class="buttons">
            <button class="botao" type="button" onclick="window.location.href='nova.php'">Agendar Consulta</button>
            <button class="botao" type="button" onclick="window.location.href='../controllers/logout.php'">Sair</button>
        </div>
    </div>
</body>

</html>
