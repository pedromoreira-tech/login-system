<?php

$host = "localhost";
$dbname = "login_system"; // nome do seu banco
$user = "root";
$pass = ""; // no XAMPP normalmente é vazio

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass
    );

    // Configurações importantes
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // mostra erros
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // retorna array associativo

} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>