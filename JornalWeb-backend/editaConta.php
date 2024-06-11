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

<body id="bodyEditaConta">
    <header>
        <a href="index.php"><img src="assets/image/logo.png" alt="Logo Jornal Web"></a>
    </header>

    <!-- Início do conteúdo -->
    <main id="mainEditaConta">

        <form class="editaConta" method="post" action="atualizaConta.php">
            <h1>Informações da sua conta</h1>
            <p>Nome: </p> <input type="text" name="nome" maxlength="80" value="<?=$nome?>" required> <br>
            <p>Email: </p> <input type="email" name="email" maxlength="80" value="<?=$email?>" required> <br>
            <p>Senha: </p> <input type="password" name="senha" id="eSenha" value="<?=$senha?>" required> <br>
            <p>Confirmar senha: </p> <input type="password" id="eConfirmaSenha" required> <br>
            <div class="container">
                <div class="botaoVoltar"><a href="conta.php">Voltar</a></div>
                <input type="submit" value="Salvar" class="botaoSalvar">
                <div class="botaoDeletar"><a href="deletar_conta.php">Deletar conta</a></div> 
            </div>

        </form>
    </main>
    <!-- Fim do conteúdo -->

    <!-- roda pé -->
    <footer>
        <p>&copy; Copyright 2000-2024 JornalWeb</p>
    </footer>

</body>

    <script>
        var senha = document.getElementById("eSenha");
        var confirmaSenha = document.getElementById("eConfirmaSenha");

        function validaSenha() {
            if(senha.value != confirmaSenha.value) {
                confirmaSenha.setCustomValidity("Senhas diferentes");
            } else {
                confirmaSenha.setCustomValidity("");
            }
        }

        senha.onchange = validaSenha;
        confirmaSenha.onkeyup = validaSenha;
    </script>

</html>