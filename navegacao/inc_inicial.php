<?php
session_start(); // Inicia a sessão

// Verifica se o formulário de login foi submetido
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifique se o nome de usuário e a senha estão corretos (você pode modificar essa lógica para se adequar às suas necessidades)
    if ($username === 'usuario' && $password === 'senha') {
        // Autenticação bem-sucedida
        $_SESSION['username'] = $username;
        header('Location: pagina_restrita.php'); // Redireciona para a página restrita após o login
        exit();
    } else {
        // Autenticação falhou
        $login_error = 'Nome de usuário ou senha inválidos.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($login_error)) { ?>
        <p><?php echo $login_error; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label for="username">Nome de usuário:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>