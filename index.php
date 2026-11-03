<?php require 'db.php';
$tarefas = $pdo->query("SELECT * FROM tarefas ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> ToDoList </title>
    <link rel="stylesheet" href="style.css">

</head> 
<body>
    <ul>
        <form action="adicionar.php" method="POST" class="Adicione">
            <input type="CaixaDeTexto" name="titulo" placeholder="Adicione uma tarefa..." required>
            <button type="BotaoAdicionar" class="botaoAdd">➡️</button>
        </form>
        <?php foreach ($tarefas as $tasks): ?>
            <li>
                <form action="alternar.php" method="POST" class="Tarefas">
                    <input type="hidden" name="id" value="<?= $tasks['id'] ?>">
                    <button type="concluido" class="<?= $tasks['concluida'] ? 'concluida' : 'pendente' ?>">
                                                    <?= $tasks['concluida'] ?    '↩️'     :    '✅' ?>
                    </button>
                </form>

                <span class="<?= $tasks['concluida'] ? '✅' : '↩️' ?>">
                    <?= htmlspecialchars($tasks['titulo']) ?>
                </span>
                <form action="excluir.php" method="POST" class="lixo">
                    <input type="hidden" name="id" value="<?= $tasks['id'] ?>">
                    <button type="lixo">🗑️</button>
                </form>

            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>