<?php
error_reporting(E_ERROR | E_PARSE);

session_start(); 

require 'conexao.php'; 

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../index.php?error=dadosErro"); 
    exit();
}

$id_usuario = $_SESSION['id_usuario'];

try {
    $sth = $connection->prepare("SELECT * FROM consultas");
    $sth->execute();
    $listaAgendamentos = $sth->fetchAll();
} catch (PDOException $e) {
    $listaAgendamentos = [];
}
?>
