<?php
    $servidor = 'localhost';
    $login = 'root';
    $senha = '';
    $base = 'lpweb';

    $conn = mysqli_connect($servidor, $login, $senha, $base);

    if (!$conn) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }
?>
