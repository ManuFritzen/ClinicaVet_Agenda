<?php
error_reporting(E_ERROR | E_PARSE);

session_start();
require 'conexao.php';

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ./index.php");
    exit();
} else {
    $id_usuario = $_SESSION['id_usuario'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $idade = $_POST['idade'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $motivo = $_POST['motivo'];

        $sth = $connection->prepare("UPDATE consultas SET idade = :idade, data = :data, hora = :hora, motivo = :motivo WHERE id = :id");
        $sth->bindValue('id', $id);
        $sth->bindValue('idade', $idade);
        $sth->bindValue('data', $data);
        $sth->bindValue('hora', $hora);
        $sth->bindValue('motivo', $motivo);

        if ($sth->execute()) {
            header("Location: ../pages/consulta.php?sucesso=sucesso");
        } else {
            header("Location: ../pages/editar.php?error=dadosErro");
        }
    }
}
