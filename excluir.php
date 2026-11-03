<?php require 'db.php';
$id = (int)($_POST['id'] ?? 0);

$stmt = $pdo->prepare("DELETE FROM tarefas WHERE id = ?");
$stmt->execute([$id]);
header('Location: index.php');
exit;