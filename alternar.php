<?php
require 'db.php';

$id = (int)($_POST['id'] ?? 0);
$stmt = $pdo->prepare("UPDATE tarefas SET concluida = 1 - concluida WHERE id = ?");
$stmt ->execute([$id]);
header('Location: index.php');
exit;   