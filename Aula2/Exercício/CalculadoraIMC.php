<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>
    <form method="post" action="index.php">
    <label for="peso">Peso:</label>
    <input type="number" id="peso"
    name="peso" required>
    <label for="altura">Altura:</label>
    <input type="number" id="altura"
    name="altura" required>
    <button type="submit">Calcular</button>
    </form>

    <?php
    if(!empty($_POST)){

        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $imc = $peso / ($altura * $altura);

        if($imc <= 16.9){
            print "Você está muito abaixo do peso.";
        }
    }
    ?>
</body>
</html>
