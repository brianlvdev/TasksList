<?php
require 'db.php';

$titulo = trim($_POST['titulo'] ?? '');

if ($titulo !== ''){
    $stmt = $pdo->prepare("INSERT INTO tarefas (titulo) VALUES (?)");
    $stmt->execute([$titulo]);
}
header('Location: index.php');
exit;