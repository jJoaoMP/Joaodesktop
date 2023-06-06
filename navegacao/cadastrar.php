<?php
    // Conexão com o banco de dados
    $servidor = 'localhost';
    $login = 'root';
    $senha = '';
    $base = 'lpweb';

    $conn = mysqli_connect($servidor, $login, $senha, $base);

    
    // Verificar se o formulário foi enviado
    if (isset($_POST['submit'])) {
        // Obter os dados do formulário
        $nomeCd = $_POST['nomeCd'];
        $emStock = $_POST['emStock'];
        $emEncomenda = $_POST['emEncomenda'];
        $emReserva = $_POST['emReserva'];
        $Genero = $_POST['Genero'];
        $categoria = $_POST['categoria'];

        // Inserir os dados no banco de dados
        $sql = "INSERT INTO cds (nomeCd, emStock, emEncomenda, emReserva, Genero, Categoria)
                VALUES ('$nomeCd', '$emStock', '$emEncomenda', '$emReserva', '$Genero', '$categoria')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'CD cadastrado com sucesso.';
        } else {
            echo 'Erro ao cadastrar o CD: ' . mysqli_error($conn);
        }
    }
    echo '<a href="index.php">Voltar a página inicial</a> ';
?>

<h2>Cadastrar Novo CD</h2>
<form method="POST" action="">
    <input type="text" name="nomeCd" placeholder="Nome do CD" required><br>
    <input type="number" name="emStock" placeholder="Em estoque" required><br>
    <input type="number" name="emEncomenda" placeholder="Em encomenda" required><br>
    <input type="number" name="emReserva" placeholder="Em reserva" required><br>
   <select name="Genero" required>
        <option value="Popular">Popular</option>
        <option value="Classical">Clássico</option>
    </select><br>
    <input type="text" name="categoria" placeholder="Categoria" required><br>
    <input type="submit" name="submit" value="Salvar">
</form>



