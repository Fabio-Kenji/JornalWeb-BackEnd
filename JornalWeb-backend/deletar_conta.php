<?php include_once "conexao.php";

session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true)) {
    header('Location: login.html');
} else {
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
}

$sql = "DELETE  FROM contas  WHERE nome = '$nome' and email = '$email'";


if (mysqli_query($conectar, $sql)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['nome']);
    header('Location: conta.php');
} else {
    echo ('<script> alert("Falha na execução!"); window.location.href="conta.php";</script>');
}
