<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Início</title>
</head>
<body>
    <h1>Sistema de Login</h1>

    <?php if (isset($_SESSION['user_id'])): ?>
        <p>Você está logado.</p>
        <a href="dashboard.php">Ir para dashboard</a><br><br>
        <a href="logout.php">Sair</a>
    <?php else: ?>
        <a href="register.php">Cadastrar</a><br><br>
        <a href="login.php">Entrar</a>
    <?php endif; ?>
</body>
</html>