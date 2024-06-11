<?php 
    //print_r($_REQUEST);
    session_start();
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        // Acessa

        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM contas WHERE email = '$email' and senha = '$senha'";
        $result = $conectar->query($sql);

        $conta = mysqli_fetch_assoc($result);
        $nome = $conta['nome'];

        //print_r($result);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['nome']);
            echo ('<script>alert("email não está cadastrado no sistema");window.location.href="login.html";</script>');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $nome;
            header('Location: index.php');
        }

    } else {
        // Não acessa

        header('location: login.html');
    }


?>