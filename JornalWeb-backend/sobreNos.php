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
    <main>

        <div id="logoSobreNos">
            <img src="assets/image/logo.png" alt="Logo" id="sobreNos">
        </div>
        <article class="sobreNos">
            <h1>Sobre Nós</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ex mollitia hic dolorem quas itaque fuga
                quisquam architecto consequuntur ea cum nisi laborum soluta sunt veniam, accusantium iste qui
                voluptatibus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro cumque aperiam accusantium
                omnis aliquam voluptatibus magni dolorum culpa eum, iusto adipisci. Dolor, vel ratione enim non dolore
                ducimus veniam quis!
                Totam quae similique, libero ipsam veritatis a nesciunt! Quibusdam, hic inventore explicabo cupiditate
                perferendis illum maiores nisi mollitia provident in, optio eveniet. Voluptatum reprehenderit vel iure
                obcaecati nesciunt sapiente perspiciatis!
                Veritatis at cupiditate natus aperiam reprehenderit error, voluptate autem incidunt provident id,
                laborum corporis! Similique, debitis enim? Esse obcaecati reiciendis placeat sed nemo fugit quia
                laboriosam corporis ipsam, dolores non!
                Reiciendis cumque ad, eaque quam consequuntur illum velit dicta animi cum dolorem repudiandae aperiam
                error consectetur corporis qui, aliquid sed blanditiis exercitationem praesentium eius quia sequi
                nostrum fuga ipsam. Reprehenderit!
                Eius minus est quas fuga facere totam, voluptatum dolor, beatae nemo harum in iure nam aliquid dolorem
                odio mollitia illum doloremque libero cum quo tempore a ad. Rem, officiis repudiandae?</p>
            <br>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore beatae quam qui maiores, animi esse
                molestias fuga veritatis impedit, quis delectus. Quia consequuntur officiis sequi. Repellat a vitae
                dolorum id.
                Nam pariatur impedit facere eos sit illum ratione dicta vel ea excepturi reprehenderit reiciendis, iste
                quis aliquid incidunt expedita dignissimos velit quasi iure necessitatibus quas? Fugiat placeat minima
                provident quisquam.
                Iusto quae natus laboriosam placeat non doloribus, debitis doloremque, dolorum, aliquam quos veniam quam
                obcaecati qui in totam adipisci molestias dolore dignissimos? Facere placeat, expedita officiis porro
                sit modi? Non?
                Asperiores explicabo cupiditate tempora unde ea? Corrupti, omnis quasi deleniti, minima voluptates
                itaque eligendi, perspiciatis cum iste iure placeat quia vero voluptate dolorum obcaecati fugit soluta
                debitis cumque nihil dicta!
                Asperiores autem eum velit officia doloribus quas, aut, ipsa, ullam rerum blanditiis soluta molestiae
                consequuntur neque itaque illum reiciendis? Voluptas modi quaerat, a exercitationem delectus veniam
                fuga? Consequatur, magnam architecto!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, repudiandae! Animi totam temporibus magnam
                molestias! Magnam distinctio id soluta praesentium eum a animi enim voluptatum accusamus, accusantium
                fugiat ipsam natus!
                Sapiente, rerum odio dolores culpa pariatur facere. Tempora odio illum consectetur facere reiciendis,
                blanditiis dolor expedita, quidem nulla illo earum suscipit doloribus! Necessitatibus iste quo
                architecto provident expedita doloremque autem.
                Nemo, illo debitis animi deserunt obcaecati eos minima ipsum assumenda distinctio eveniet adipisci quos
                quis. Distinctio a cumque ex commodi praesentium explicabo? Nam vero ipsa cumque voluptatum. Culpa,
                exercitationem voluptatem.
                Facilis corrupti aliquid distinctio culpa voluptate impedit vero, earum, expedita quo aut amet obcaecati
                sapiente nulla quidem dolore exercitationem, porro cupiditate saepe quae aperiam placeat. Impedit ullam
                modi hic magni.
                Cumque, neque libero impedit doloremque vel tempore provident maiores deleniti repellat voluptate
                asperiores reiciendis? In excepturi inventore, quisquam voluptas dolorem deleniti eaque placeat
                necessitatibus voluptatibus, sapiente officiis ipsa culpa laudantium.
                Excepturi consectetur perferendis corporis numquam quisquam, est esse laboriosam dolore saepe nulla eius
                rerum molestiae odio doloribus quae provident iure rem alias vero. Cumque, dolorem? Expedita provident
                odit voluptates nam?</p>
            <br>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In debitis sint repellendus saepe impedit optio
                dolor neque, modi exercitationem rerum nesciunt laboriosam quos corrupti accusantium odio hic,
                consectetur quas libero?
                Sequi dignissimos esse mollitia consequatur praesentium velit soluta magni inventore error nam eveniet,
                id sunt non quos, nostrum adipisci optio perferendis culpa, placeat repellendus assumenda aperiam
                debitis? Soluta, sapiente vel!
                Alias in optio facilis! Odio ea, dolore totam ut eveniet eos explicabo. Molestiae, nisi odio qui velit
                expedita accusamus tenetur assumenda cumque ipsa voluptate rem pariatur illo, quibusdam porro adipisci?
            </p>
        </article>
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