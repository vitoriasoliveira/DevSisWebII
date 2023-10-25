<?php
session_start();

if(!empty($_POST)) {
    $money = $_POST["money"];
    $coin = $_POST["coin"];

    switch($coin){
        case "dollar":
            $_SESSION["amount_dollar"] = convertToDollar($money);
            header("location:message.php");
            break;
        case "euro":
            $_SESSION["amount_euro"] = convertToEuro($money);
            header("location:message.php");
            break;
        case "peso":
            $_SESSION["amount_peso"] = convertToPeso($money);
            header("location:message.php");
            break;
        
    }
    exit;
}
else{
    $_SESSION["error"] = "ops, something wrong happened.";
    header("location:message.php");
}

function convertToDollar($money)
{
    return $money / 5;
}
function convertToEuro($money)
{
    return $money / 5.3;
}
function convertToPeso($money)
{
    return $money * 70.1;
}
