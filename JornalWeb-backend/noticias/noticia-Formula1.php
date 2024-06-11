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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <a href="../index.php"><img src="../assets/image/logo.png" alt="Logo Jornal Web"></a>
        <a href="../conta.php" id="headerLogin"><?=$nome?></a>
    </header>

    <nav>
        <a href="../index.php">Home</a>
        <a href="../brasil.php">Brasil</a>
        <a href="../internacional.php">Internacional</a>
        <a href="../entretenimento.php">Entretenimento</a>
        <a href="../esportes.php">Esportes</a>
        <div id="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                &#9776;
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../ondeEstamos.php">Onde Estamos</a></li>
                <li><a class="dropdown-item" href="../sobreNos.php">Sobre nós</a></li>
            </ul>
        </div>
    </nav>

    <!-- Início do conteúdo -->
    <main>

        <article class="noticia">

            <h1>Fórmula 1</h1>

            <h6>Max Verstappen vence GP da China de F1 pela primeira vez.</h6>

            <img src="../assets/image/max-verstappen.jpeg" alt="">

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia neque nesciunt accusantium iusto quo hic omnis, deserunt facere suscipit nisi ratione fuga cum. Sint omnis, labore aliquam nulla distinctio explicabo?
            Vel necessitatibus ullam dicta ipsam quisquam deserunt optio quia modi eum omnis neque nihil porro ab molestias eveniet quae dignissimos ipsum, recusandae in illo tempora excepturi expedita? Alias, ullam sunt.
            Non soluta officiis, perspiciatis fugiat incidunt libero rerum accusamus corrupti molestiae quasi atque, tenetur sit? Facere laborum repellat sapiente iure voluptates magnam optio aperiam ipsum eius. Possimus saepe explicabo ipsum.
            Qui quos aut, repudiandae iure provident minus necessitatibus sed eum consequatur! Neque similique dolorum sed impedit vero! Eligendi ea ratione, omnis autem, dicta nemo hic assumenda molestiae magni libero provident.</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel natus eaque dolorem eos, laborum possimus rerum, adipisci dolorum totam doloribus maxime, voluptatibus cumque cupiditate aliquid eveniet ullam voluptatum amet enim?
            Soluta debitis assumenda placeat aspernatur deleniti! A eum libero minima? Distinctio deserunt assumenda, excepturi quis veniam nisi? Est nulla odit, fugit quod aspernatur eligendi nemo beatae fugiat consectetur cumque ratione!
            Sapiente veritatis sunt neque quisquam aliquid saepe beatae. Libero voluptas fugit non ad soluta, molestias ipsum aspernatur repudiandae aliquid, nemo ducimus eaque animi atque quasi! Odit fugit quis asperiores quam?
            Sequi ipsam, nihil illum, tempora ipsa corporis veritatis, quisquam unde fuga officia neque cupiditate assumenda. Soluta, adipisci quae temporibus expedita placeat sunt debitis in. Porro odit alias voluptas facere modi?
            Facere cumque quisquam at voluptate tempora voluptatem eum dolorum officiis, dolorem, dicta vitae maxime beatae nobis illo unde. Earum error, modi ipsa assumenda dolore corrupti accusamus ipsum eveniet architecto itaque?
            Delectus necessitatibus magni laudantium dolorem veniam mollitia, fugiat voluptatem rerum dicta eveniet temporibus minus totam illum eos amet ullam omnis! Voluptatem est hic facilis quos in aspernatur incidunt, soluta non?</p>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius ipsam asperiores suscipit harum, blanditiis rem, nostrum aperiam perferendis eos sint reprehenderit consequatur officia aspernatur porro illum minima et corporis quibusdam.
            Iusto in blanditiis impedit voluptates cum fugit quod non illo error, fugiat nobis atque, tempore, ratione tenetur excepturi perspiciatis vero dolorum delectus quaerat! Possimus placeat itaque culpa earum facere voluptate!</p>

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