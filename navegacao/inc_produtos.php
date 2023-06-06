<h2>Listagem de Produtos</h2>

<?php
    // ...

    echo '<h2>Cadastrar Novo CD</h2>';
    echo '<a href="cadastrar.php">Cadastrar Novo CD</a>';
    echo '<form method="POST" action="">';

    

    // Exibir link para listar todos os CDs
    echo '<a href="index.php?pagina=produtos&listar=true">Listar CDs</a>';

    // Verificar se a página de listagem foi solicitada
    if (isset($_GET['pagina']) && $_GET['pagina'] === 'produtos' && isset($_GET['listar']) && $_GET['listar'] === 'true') {
        // Consulta para listar todos os CDs
        $sql = "SELECT * FROM cds";
        $result = mysqli_query($conn, $sql);

        echo '<h2>Lista de CDs</h2>';

        if (mysqli_num_rows($result) > 0) {
            echo '<table>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Nome do CD</th>';
            echo '<th>Em estoque</th>';
            echo '<th>Em encomenda</th>';
            echo '<th>Em reserva</th>';
            echo '<th>Gênero</th>';
            echo '<th>Categoria</th>';
            echo '<th>Ações</th>';
            echo '</tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['idCd'] . '</td>';
                echo '<td>' . $row['nomeCd'] . '</td>';
                echo '<td>' . $row['emStock'] . '</td>';
                echo '<td>' . $row['emEncomenda'] . '</td>';
                echo '<td>' . $row['emReserva'] . '</td>';
                echo '<td>' . $row['Genero'] . '</td>';
                echo '<td>' . $row['Categoria'] . '</td>';
                echo '<td>';
                echo '<a href="editar.php?id=' . $row['idCd'] . '">Editar</a> ';
                echo '<a href="excluir.php?id=' . $row['idCd'] . '">Excluir</a>';
                echo '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'Nenhum CD encontrado.';
        }
    }

    // ...
?>
