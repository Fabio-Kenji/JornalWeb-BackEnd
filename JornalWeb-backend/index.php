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

        <!-- Carrossel -->
        
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/image/degrau-areia-balneario-camboriu.jpeg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="noticias/noticia-AmpliacaoNaFaixaDeAreia.php">
                            <h3>Ampliação da faixa de areia</h3>
                            <p>Cidades de 6 estados alargaram 38km de praias desde 1998</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image/vape-geracao-4.jpeg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="noticias/noticia-RiscosDoVape.php">
                            <h3>Riscos do vape</h3>
                            <p>Cigarro eletrônico vicia? Tem nicotina? Causa câncer?</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image/11mate1.jpeg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="noticias/noticia-SucessoNasAreias.php">
                            <h3>Sucesso nas areias</h3>
                            <p>'Olha o mate': praias do Rio têm quase 300 vendedores de bebida</p>
                        </a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Fim do Carrossel -->

        <!-- Grid Card -->

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
                    <a href="noticias/noticia-NovoMapa.php"><img src="assets/image/mapa-mundi.jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-NovoMapa.php">
                            <h5 class="card-title">Novo Mapa</h5>
                            <p class="card-text">Repercussão de mapa-múndi do IBGE com Brasil no centro mostra 'poder da
                                cartografia', diz especialista</p>
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

        <!-- Fim do Grid Card -->

    </main>
    <!-- Fim do conteúdo -->

    <!-- roda pé -->

    <footer>
        <p>&copy; Copyright 2000-2024 JornalWeb</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>