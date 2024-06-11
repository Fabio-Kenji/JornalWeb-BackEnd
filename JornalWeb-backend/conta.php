<?php 
    session_start();
    if(!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true)) {
        header('Location: login.html');
    } else {
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornal Web</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="bodyConta">
    <header>
        <a href="index.php"><img src="assets/image/logo.png" alt="Logo Jornal Web"></a>
    </header>

    <!-- Início do conteúdo -->
    <main id="mainConta">

        <div class="conta">
            <h1>Informações da sua conta</h1>
            <p>Nome: <?=$nome?></p>
            <p>Email: <?=$email?></p>
            <p>Senha: <?=$senha?></p>
            <div class="container">
                <div class="botao"><a href="editaConta.php">Editar conta</a></div>
                <div class="botaoSair"><a href="sair.php">Sair</a></div>
            </div>

        </div>
    </main>
    <!-- Fim do conteúdo -->

    <!-- roda pé -->
    <footer>
        <p>&copy; Copyright 2000-2024 JornalWeb</p>
    </footer>

</body>

</html>