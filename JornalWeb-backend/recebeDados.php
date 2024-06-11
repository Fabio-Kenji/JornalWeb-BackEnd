<?php

include_once "conexao.php";

try {
    $nome = $_POST['fNome'] ?? "Sem Nome";
    $email = $_POST['fEmail'] ?? "Sem Email";
    $senha = $_POST['fSenha'] ?? "Sem senha";

    /*
CREATE DATABASE IF NOT EXISTS bancoJornalWeb;

USE bancoJornalWeb;

CREATE TABLE IF NOT EXISTS contas (
codigo int AUTO_INCREMENT PRIMARY KEY,
nome varchar(80) NOT NULL,
email varchar(80) NOT NULL,
senha varchar(80) NOT NULL);
*/

    $sql = "SELECT email FROM contas WHERE email = '$email'";
    $result = $conectar->query($sql);
    $conta = mysqli_fetch_assoc($result);
    $em = $conta['email'];
    if ($em == null) {

        $nome = strtoupper($nome);

        $sql = "INSERT INTO contas (nome, email, senha) values ('$nome', '$email', '$senha')";

        if (mysqli_query($conectar, $sql)) {
            echo ('<script>alert("Cliente atualizado com sucesso!"); window.location.href="index.php";</script>');
        }
        header("location: index.php");
    } else {

        echo ('<script>alert("email já cadastrado no sistema");window.location.href="cadastro.html";</script>');
    }
} catch (PDOException $e) {
    echo ("Falha na gravação do registro" . $e->getMessage());
}
