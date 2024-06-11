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
            <a href="noticias/noticia-GruposXiitas.php"><img src="assets/image/iraq.jpeg" class="card-img-top h-auto d-inline-block" alt="..."></a>
            <div class="card-body">
                <a href="noticias/noticia-GruposXiitas.php">
                    <h5 class="card-title">Iraque: grupos xiitas no país</h5>
                    <p class="card-text">Pessoas comemoram a chegada do ano novo em Bagdá, Iraque.</p>
                </a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-10000pesos.php"><img src="assets/image/10000-pesos.jpeg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-10000pesos.php">
                            <h5 class="card-title">Argentina coloca em circulação nova nota de 10 mil pesos</h5>
                            <p class="card-text">Até então, a cédula de maior valor disponível no país era a de 2 mil pesos. Lançamento ocorre em meio a uma inflação de 287,9%.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-TensaoNoOrienteMedio.php"><img
                            src="assets/image/israel-palestinians-syria-iran.jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-TensaoNoOrienteMedio.php">
                            <h5 class="card-title">Tensão no Oriente Médio</h5>
                            <p class="card-text">Como Irã e Israel fortalecem o poderio militar com compra de armas</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-HackerAdolescente.php"><img src="assets/image/Hacker-preso.jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-HackerAdolescente.php">
                            <h5 class="card-title">Como hacker adolescente se transformou em um dos criminosos mais procurados da Europa</h5>
                            <p class="card-text">Kivimäki foi responsável por um dos ataques mais chocantes da história da Finlândia — ele chantageou 33 mil pessoas, ameaçando vazar as anotações das suas sessões de terapia online.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-PutinPresidente.php"><img src="assets/image/Putin.jpeg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-PutinPresidente.php">
                            <h5 class="card-title">Putin assume quinto mandato como presidente da Rússia e promete 'vitória' em apelo patriótico</h5>
                            <p class="card-text">Oposição russa no exílio marca data com críticas ao mandatário, acusado pelo Ocidente de minar a democracia no país</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <!-- Fim do conteúdo -->

    <!-- roda pé -->

    <footer class="internacional">
        <p>&copy; Copyright 2000-2024 JornalWeb</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>