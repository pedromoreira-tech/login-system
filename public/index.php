<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Início</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container dashboard">
        <h1>Sistema de Login</h1>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Sair</a>
        <?php else: ?>
            <a href="login.php">Entrar</a>
            <a href="register.php">Cadastrar</a>
        <?php endif; ?>
    </div>
</body>
</html>