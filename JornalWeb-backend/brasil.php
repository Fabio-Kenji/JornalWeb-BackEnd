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
            <a href="noticias/noticia-Manifestacao.php"><img src="assets/image/manifestacao.jpeg" class="card-img-top h-auto d-inline-block"></a>
            <div class="card-body">
                <a href="noticias/noticia-Manifestacao.php">
                    <h5 class="card-title">Bolsonaro reúne apoiadores em manifestação no Rio</h5>
                    <p class="card-text">Ato acontece em Copacabana, na Zona Sul da cidade.</p>
                </a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-TragediaRS.php"><img src="assets/image/Inundacao-RS.jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-TragediaRS.php">
                            <h5 class="card-title">Tragédia no RS: municípios calculam 100 mil casas destruídas ou
                                danificadas pela chuva</h5>
                            <p class="card-text">Dados foram informados pelas prefeituras à Defesa Civil e valem até a
                                tarde de 7 de maio, segundo Confederação Nacional dos Municípios. Prejuízo estimado é de
                                R$ 4,6 bilhões.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="noticias/noticia-EmpresarioAgiota.php"><img src="assets/image/Empresario-agiota.jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-EmpresarioAgiota.php">
                            <h5 class="card-title">Empresário envolvido em esquema de agiotagem do PCC é preso a caminho
                                do RS para ajudar vítimas da enchente</h5>
                            <p class="card-text">Segundo o Ministério Público, Sedemir Fagundes integra um grupo que
                                movimentou mais de R$ 20 milhões somente no ano passado. Os criminosos emprestavam
                                dinheiro com juros que chegavam a 300% por mês, além de praticarem extorsão e ameaça
                                contra os devedores.</p>
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
                    <a href="noticias/noticia-ChuvaDeMeteoro.php"><img src="assets/image/Chuva-de-Meteoro.jpeg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <a href="noticias/noticia-ChuvaDeMeteoro.php">
                            <h5 class="card-title">Chuva de meteoros é registrada no interior de SP; fotos</h5>
                            <p class="card-text">Estudantes de Itapetininga (SP) captaram o fenômeno no domingo (5); astrônomo amador de Nhandeara (SP) também fez o registro na madrugada de segunda (6). Chuva de meteoros Eta Aquáridas é formada por pedaços do cometa Halley e pode ser vista a olho nu.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Fim do conteúdo -->

    <!-- roda pé -->

    <footer class="brasil">
        <p>&copy; Copyright 2000-2024 JornalWeb</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>