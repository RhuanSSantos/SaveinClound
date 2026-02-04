<?php
require "config.php";

$nome  = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $email]);

echo "Usuário inserido com sucesso! <br>";
echo "<a href='index.php'>Voltar</a>";
