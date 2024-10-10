<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    $senha_criptografada = md5($senha);

    try {
        $sth = $connection->prepare("SELECT email FROM usuario WHERE email = :email");
        $sth->bindParam(':email', $email);
        $sth->execute();

        if ($sth->rowCount() > 0) {
            header("Location: ../index.php?error=emailExistErro");
            exit();
        }

        $sth = $connection->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
        $sth->bindParam(':nome', $nome);
        $sth->bindParam(':email', $email);
        $sth->bindParam(':senha', $senha_criptografada);

        if ($sth->execute()) {
            header("Location: ../index.php?sucesso=true");
            exit();
            
        } else {
            $errorInfo = $sth->errorInfo();
            echo "Erro ao cadastrar: " . $errorInfo[2];
            exit();
        }
    } catch (PDOException $e) {
        echo "Erro de banco de dados: " . $e->getMessage();
        exit();
    }
}
?>
