<?php

session_start();
require 'conexao.php';

if (empty($_SESSION['id_usuario'])) {
    header("Location: ./index.php");
    exit();
} else {
    $usuarioId = $_SESSION['id_usuario'];

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];

        $query = $connection->prepare("DELETE FROM consultas WHERE id = :id");
        $query->bindValue('id', $id);

        if ($query->execute()) {
            header("Location: ../pages/consulta.php?sucesso=sucesso");
        } else {
            header("Location: ../pages/consulta.php?error=excluir_dados");
        }
    }
}