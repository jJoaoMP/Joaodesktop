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

        // Consultar o CD pelo ID
        $sql = "SELECT * FROM cds WHERE idCd = '$idCd'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Verificar se o formulário foi enviado
            if (isset($_POST['submit'])) {
                // Obter os dados do formulário
                $nomeCd = $_POST['nomeCd'];
                $emStock = $_POST['emStock'];
                $emEncomenda = $_POST['emEncomenda'];
                $emReserva = $_POST['emReserva'];
                $Genero = $_POST['Genero'];
                $categoria = $_POST['categoria'];

                // Atualizar os dados no banco de dados
                $sql = "UPDATE cds SET nomeCd = '$nomeCd', emStock = '$emStock', emEncomenda = '$emEncomenda',
                        emReserva = '$emReserva', Genero = '$Genero', Categoria = '$categoria'
                        WHERE idCd = '$idCd'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo 'CD atualizado com sucesso.';
                } else {
                    echo 'Erro ao atualizar o CD: ' . mysqli_error($conn);
                }
            }

            // Exibir o formulário de edição
            echo '<h2>Editar CD</h2>';
            echo '<form method="POST" action="">';
            echo '<input type="hidden" name="idCd" value="' . $row['idCd'] . '">';
            echo '<input type="text" name="nomeCd" placeholder="Nome do CD" value="' . $row['nomeCd'] . '" required><br>';
            echo '<input type="number" name="emStock" placeholder="Em estoque" value="' . $row['emStock'] . '" required><br>';
            echo '<input type="number" name="emEncomenda" placeholder="Em encomenda" value="' . $row['emEncomenda'] . '" required><br>';
            echo '<input type="number" name="emReserva" placeholder="Em reserva" value="' . $row['emReserva'] . '" required><br>';
            echo '<select name="Genero" required>';
            echo '<option value="Popular" ' . ($row['Genero'] == 'Popular' ? 'selected' : '') . '>Popular</option>';
            echo '<option value="Classical" ' . ($row['Genero'] == 'Classical' ? 'selected' : '') . '>Classical</option>';
            echo '</select><br>';
            echo '<input type="text" name="categoria" placeholder="Categoria" value="' . $row['Categoria'] . '" required><br>';
            echo '<input type="submit" name="submit" value="Salvar">';
            echo '</form>';
        } else {
            echo 'CD não encontrado.';
        }

         echo '<a href="index.php">Voltar a página inicial</a> ';
    }
?>
