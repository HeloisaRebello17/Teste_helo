<?php
function soma($n1, $n2)
{
    $soma = $n1 + $n2;
    echo "Soma: $soma <br>";
}

function subtrair($n1, $n2)
{
    $subtracao = $n1 - $n2;
    echo "Subtração: $subtracao<br>";
}

function dividir($n1, $n2)
{
    $divisao = $n1 / $n2;
    echo "Divisão: $divisao<br>";
}

function multiplicar($n1, $n2)
{
    $multiplicacao = $n1 * $n2;
    echo "Multiplicação: $multiplicacao<br>";
}
function resto($n1, $n2)
{
    $restodadivisao = $n1 % $n2;
    echo "Resto da divisão: $restodadivisao<br>";
}
function triplo($num){
    $calculo = $num * 3;
    return $calculo; /*retorno para o resultado do cálculo.*/
}
function parouimpar($n1){
    if ($parouimpar =  $n1 % 2 == 0){
    return "par";
} else {
    return "impar";
}
}

function dia($n1){
    if ($n1 == 1){
        return "Domingo";
    }
    else if($n1== 2){
        return "Segunda";
    }
    else if($n1== 3){
        return "Terça";
    }
    else if($n1 == 4){
        return "Quarta";
    }
    else if($n1 == 5){
        return "Quinta";
    }
    else if($n1 == 6){
        return "Sexta";
    }
    else if($n1 == 7){
        return "Sábado";
    }
    else {
        return "Dia da semana inválida";
    }
}
?>
