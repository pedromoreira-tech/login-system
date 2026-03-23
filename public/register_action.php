<?php
session_start();
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $senha = trim($_POST["senha"] ?? "");

    if (empty($nome) || empty($email) || empty($senha)) {
        die("Preencha todos os campos.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email inválido.");
    }

    $check = $pdo->prepare("SELECT id FROM users WHERE email = :email");
    $check->execute([':email' => $email]);

    if ($check->fetch()) {
        die("Este email já está cadastrado.");
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (nome, email, senha) VALUES (:nome, :email, :senha)");
    $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senhaHash
    ]);

    header("Location: login.php");
    exit();
}
?>