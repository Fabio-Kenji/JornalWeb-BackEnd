<?php 
try {

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'bancoJornalWeb');

    $conectar = new mysqli(HOST, USER , PASS, BASE);

} catch (PDOException $e) {
    echo ("Falha ao se conectar" . $e->getMessage());
}
?>