<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do Sistema</title>
</head>
<body>
    <main>
        <h1>Mensagem do Sistema</h1>
        <?php
        if (!empty($_SESSION["error"])) :
        ?>
            <p><?= $_SESSION["error"]; ?></p>
        <?php 
        endif;
        unset($_SESSION["error"]); ?>
        
        <?php
        if (!empty($_SESSION["amount_dollar"])) :
        ?>
            <p><?= "Valor em Dolar = " . $_SESSION["amount_dollar"]; ?></p>
        <?php 
        endif;
        unset($_SESSION["amount_dollar"]); ?>

        <?php
        if (!empty($_SESSION["amount_euro"])) :
        ?>
            <p><?= "Valor em Euro = " . $_SESSION["amount_euro"]; ?></p>
        <?php 
        endif;
        unset($_SESSION["amount_euro"]); ?>

        <?php
        if (!empty($_SESSION["amount_peso"])) :
        ?>
            <p><?= "Valor em Pesos Argentinos = " . $_SESSION["amount_peso"]; ?></p>
        <?php 
        endif;
        unset($_SESSION["amount_peso"]); ?>


    </main>
</body>
</html>
