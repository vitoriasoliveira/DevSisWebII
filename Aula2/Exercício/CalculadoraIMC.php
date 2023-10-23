<!DOCTYPE html>
<html lang="pt-BR">
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
        $altura = $_POST["altura"] /100;

        $imc = $peso / ($altura * $altura);
        $imcnovo = number_format($imc, 2);
        print "Seu IMC $imcnovo" . PHP_EOL;

        if($imcnovo <= 18.5){
            print "Magreza.";
        }
        elseif($imcnovo <= 24.9) {
            print "Normal.";
        }
        elseif($imcnovo <= 29.9) {
            print "Sobrepeso.";
        }
        elseif($imcnovo <= 34.9) {
            print "Obesidade grau I";
        }
        elseif($imcnovo <= 39.9) {
            print "Obesidade grau iI.";
        }
        elseif($imcnovo > 40) {
            print "Obesidade grau III.";
        }
    }
    ?>
</body>
</html>
