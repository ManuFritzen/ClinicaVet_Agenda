<?php

require 'conexao.php';  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    try {
        $sth = $connection->prepare("SELECT * FROM usuario WHERE email = :email");
        $sth->bindParam(':email', $email);
        $sth->execute();

        $usuario = $sth->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            if (md5($senha) == $usuario['senha']) {
                session_start();
                $_SESSION['id_usuario'] = $usuario['id'];
                $_SESSION['nome_usuario'] = $usuario['nome'];
                header("Location: ../pages/consulta.php");  
            } else {
                header("Location: ../index.php?error=loginErro");  
            }
        } else {
            header("Location: ../index.php?error=emailNullErrol"); 
        }
    } catch (PDOException $e) {
        header("Location: ../index.php?error=dadosErro"); 
        exit();
    }
}
?>
