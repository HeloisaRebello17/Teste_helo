<?php
include "functions.php";
$num1 = 10;
$num2 = 20;
soma($num1, $num2);
subtrair($num1, $num2);
dividir($num1, $num2);
multiplicar($num1, $num2);
resto($num1, $num2);
echo "O triplo é: ".triplo(9);
if (triplo(9) > 30){
    echo "É maior";
} else {
    echo " É menor";
}

$n1 = 0;
$msg= "";
if(isset($_GET['numero'])){
   $num = $_GET['numero'];
    $msg = "<br>O número $n1 é: ".parouimpar($n1);
}

$n1 = 0;
$msg= "";
if(isset($_GET['numero'])){
    $n1 = $_GET['numero'];
    $msg= "<br>O número $n1 é:" .dia($n1);
}




/*$num1 = 50;
$num2 = 60;
$soma = $num1 + $num2;
echo $soma. "<br>";

$num1 = 100;
$num2 = 2;
$soma = $num1 + $num2;
echo $soma. "<br>";*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Par ou Impar</title>
</head>
<body>
    <form action="">
    Número: <input type="text">
    <input type="submit" value="Verificar">
    <span><?php echo $msg?></span>
    </form>
</body>
</html>