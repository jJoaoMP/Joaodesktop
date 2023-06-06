<?php
    // Conexão com o banco de dados
    $servidor = 'localhost';
    $login = 'root';
    $senha = '';
    $base = 'lpweb';

    $conn = mysqli_connect($servidor, $login, $senha, $base);

    // Verificar se o parâmetro 'id' foi fornecido
    if (isset($_GET['id'])) {
        $idCd = $_GET['id'];

        // Excluir o CD do banco de dados
        $sql = "DELETE FROM cds WHERE idCd = '$idCd'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'CD excluído com sucesso.';
        } else {
            echo 'Erro ao excluir o CD: ' . mysqli_error($conn);
        }
    }
    echo '<a href="index.php">Voltar a página inicial</a> ';
?>
