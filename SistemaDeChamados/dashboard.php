<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Help Desk - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="p-5">
    <nav class="bg-info p-3 d-flex justify-content-between">
        <div>
            <a href="add-new-call.html" class="text-white text-decoration-none">Novo chamado</a>
            <a href="list-calls.html" class="text-white text-decoration-none">Lista de chamados</a>
        </div>
        <a href="index.html" class="text-white text-decoration-none">Sair</a>
    </nav>
    <main class="text-center">
        <h1>Bem-vindo de volta <?= $_SESSION["name"] ?></h1>

    </main>
</body>
</html>
