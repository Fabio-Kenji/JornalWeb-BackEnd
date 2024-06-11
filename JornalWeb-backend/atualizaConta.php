<?php 
session_start();
if(!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true)) {
    header('Location: login.html');
} else {
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
}

include_once "conexao.php";

$novoNome = $_POST['nome'] ?? 'Sem nome';
$novoEmail = $_POST['email'] ?? 'Sem email';
$novaSenha = $_POST['senha'] ?? '';

$sql = "SELECT email FROM contas WHERE email = '$novoEmail'";
$result = $conectar->query($sql);
$conta = mysqli_fetch_assoc($result);
$em = $conta['email'];

if ($em == null or $em == $email) {
    $novoNome = strtoupper($novoNome);

    $sql = "UPDATE contas SET
    nome = '$novoNome',
    email = '$novoEmail',
    senha = '$novaSenha'
    WHERE nome = '$nome' and email = '$email'";

    if (mysqli_query($conectar,$sql)) {
        $_SESSION['email'] = $novoEmail;
        $_SESSION['senha'] = $novaSenha;
        $_SESSION['nome'] = $novoNome;
        header('Location: conta.php');
    } else {
        echo('<script> alert("Falha na execução!"); window.location.href="conta.php";</script>');
    }
} else {
    echo ('<script>alert("email já cadastrado no sistema");window.location.href="editaConta.php";</script>');
}


?>