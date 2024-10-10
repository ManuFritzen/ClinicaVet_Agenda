<?php
session_start();
require 'conexao.php';

if (empty($_SESSION['id_usuario'])) {
    header("Location: ./index.php");
    exit();
} else {
    $usuarioId = $_SESSION['id_usuario'];
    $consultaId = $_GET['id'];

    $query = $connection->prepare("SELECT * FROM consultas WHERE id = :id");
    $query->bindValue('id', $consultaId);
    $query->execute();

    $resultado = $query->fetchAll();

    if (count($resultado) > 0) {
        $consulta = $resultado[0];
    }
}
?>