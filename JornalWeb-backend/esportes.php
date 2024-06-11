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
            <a href="noticias/noticia-FLAxPAL.php"><img src="assets/image/pal-fla.jpg" class="card-img-top h-auto d-inline-block"></a>
            <div class="card-body">
                <a href="noticias/noticia-FLAxPAL.php">
                    <h5 class="card-title">Em duelo pegado, Palmeiras e Flamengo empatam no Brasileirão</h5>
                    <p class="card-text">Ao todo, onze cartões amarelos foram distribuídos; seis para o Verdão e cinco para o Rubro-Negro</p>
                </a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-ClassicoMineiro.php"><img src="assets/image/futebol.jpeg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-ClassicoMineiro.php">
                            <h5 class="card-title">Clássico mineiro</h5>
                            <p class="card-text">Atlético-MG x Cruzeiro: gol de Zaracho tem mais de um minuto de troca
                                de
                                passes até voleio</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-JakePaul.php"><img
                            src="assets/image/Jake-Paul.jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-JakePaul.php">
                            <h5 class="card-title">Jake Paul promete nocautear Mike Tyson: "Tenho que acabar com ele"</h5>
                            <p class="card-text">Youtuber enfatiza respeito à lenda do boxe e diz que o ama, mas que os dois estão em guerra</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-NBACeltics.php"><img src="assets/image/celtics-basquete.jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-NBACeltics.php">
                            <h5 class="card-title">NBA: Celtics atropelam os Cavaliers no jogo 1 das semifinais dos playoffs</h5>
                            <p class="card-text">No TD Garden, Boston venceu os visitantes por 120 a 95 e abriu 1 a 0 na série dos playoffs da Conferência Leste</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-Formula1.php"><img src="assets/image/max-verstappen.jpeg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-Formula1.php">
                            <h5 class="card-title">Fórmula 1</h5>
                            <p class="card-text">Max Verstappen vence GP da China de F1 pela primeira vez</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Fim do conteúdo -->

    <!-- roda pé -->

    <footer class="esportes">
        <p>&copy; Copyright 2000-2024 JornalWeb</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>