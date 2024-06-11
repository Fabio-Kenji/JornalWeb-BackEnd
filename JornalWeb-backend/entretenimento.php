<?php 
    session_start();
    if(!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true)) {
        header('Location: login.html');
    } else {
        $nome = $_SESSION['nome'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornal Web</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <a href="index.php"><img src="assets/image/logo.png" alt="Logo Jornal Web"></a>
        <a href="conta.php" id="headerLogin"><?=$nome?></a>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="brasil.php">Brasil</a>
        <a href="internacional.php">Internacional</a>
        <a href="entretenimento.php">Entretenimento</a>
        <a href="esportes.php">Esportes</a>
        <div id="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                &#9776;
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="ondeEstamos.php">Onde Estamos</a></li>
                <li><a class="dropdown-item" href="sobreNos.php">Sobre nós</a></li>
            </ul>
        </div>
    </nav>

    <!-- Início do conteúdo -->
    <main class="main">

        <div id="main-card" class="card">
            <a href="noticias/noticia-DaviBBB.php"><img src="assets/image/davi-mae-aeroporto-reproducaotvbahia.jpeg" class="card-img-top h-auto d-inline-block" ></a>
            <div class="card-body">
                <a href="noticias/noticia-DaviBBB.php">
                    <h5 class="card-title">Davi é recebido com festa por multidão no aeroporto de Salvador após vencer BBB 24</h5>
                    <p class="card-text">Baiano retornou para Salvador neste sábado (20), após finalizar os compromissos de trabalho no Rio de Janeiro</p>
                </a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-TodoMundoOdeiaChris.php"><img src="assets/image/Todo-mundo-odeia-o-cris.jpeg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-TodoMundoOdeiaChris.php">
                            <h5 class="card-title">'Todo Mundo Odeia o Chris': 15 anos após final da série, veja como está o elenco hoje em dia</h5>
                            <p class="card-text">Todo Mundo Odeia Supletivo', último episódio da série, foi exibido no dia 8 de maio de 2009</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-RitaLee.php"><img
                            src="assets/image/rita-lee-divulgacao.jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-RitaLee.php">
                            <h5 class="card-title">Veja as dez músicas de Rita Lee mais tocadas desde a morte dela, há um ano</h5>
                            <p class="card-text">De acordo com ECAD, 'Mania de Você', 'Agora Só Falta Você' e 'Ovelha Negra' lideram ranking. Escritório de Arrecadação também divulgou composições da Rainha do Rock mais regravadas</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-ShowMadonna.php"><img src="assets/image/Madonna.jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-ShowMadonna.php">
                            <h5 class="card-title">Programação da Globo hoje: terça tem bastidores do show da Madonna no Profissão Repórter</h5>
                            <p class="card-text">Confira a grade de 7 de maio e os horários dos programas da TV Globo</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-PozeDoRodo.php"><img src="assets/image/poze.jpeg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-PozeDoRodo.php">
                            <h5 class="card-title">Poze do Rodo e Vivi Noronha mostram pijaminhas com estampas de seus rostos</h5>
                            <p class="card-text">MC usa roupa com fotos dela e a influenciadora com as do namorado</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <!-- Fim do conteúdo -->

    <!-- roda pé -->

    <footer class="entretenimento">
        <p>&copy; Copyright 2000-2024 JornalWeb</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>