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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container dashboard">
        <h1>Dashboard</h1>

        <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION["user_nome"]); ?>!</p>
        <p><?php echo htmlspecialchars($_SESSION["user_email"]); ?></p>

        <a href="logout.php">Sair</a>
    </div>
</body>
</html>