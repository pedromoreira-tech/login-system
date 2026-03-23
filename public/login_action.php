<?php
session_start();
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $senha = trim($_POST["senha"] ?? "");

    if (empty($email) || empty($senha)) {
        die("Preencha todos os campos.");
    }

    $stmt = $pdo->prepare("SELECT id, nome, email, senha FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user["senha"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_nome"] = $user["nome"];
        $_SESSION["user_email"] = $user["email"];

        header("Location: dashboard.php");
        exit();
    } else {
        die("Email ou senha incorretos.");
    }
}
?>