<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION["user_nome"]); ?>!</p>
    <p>Seu email é: <?php echo htmlspecialchars($_SESSION["user_email"]); ?></p>

    <br>
    <a href="logout.php">Sair</a>
</body>
</html>