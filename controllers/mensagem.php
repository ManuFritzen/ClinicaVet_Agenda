<?php

$erro = $_GET['error'] ?? null;
$acerto = $_GET['sucesso'] ?? null;

switch ($erro) {
    case 'loginErro':
        echo '<span style="color:#FF5733; text-align:center;">Senha ou email estão incorretos! Por favor, tente novamente.</span>';
        break;
    case 'emailNullErro':
        echo '<span style="color:#FF5733; text-align:center;">Email não localizado! Por favor, cadastre-se ou tente novamente.</span>';
        break;
    case 'emailExistErro':
        echo '<span style="color:#FF5733; text-align:center;">Esse email já está cadastrado!</span>';
        break;
    case 'dadosErro':
        echo '<span style="color:#FF5733; text-align:center;">Dados inválidos! Tente novamente.</span>';
        break;
}

if ($acerto) {
    echo '<span style="color:#28A745; text-align:center;">Cadastro realizado com sucesso! Bem-vindo(a).</span>';
}
?>

