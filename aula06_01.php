<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
</head>
<body>
    <h1>Aula06_01 - 17/09/2025</h1>
    <h2>Operadores Aritimeticos</h2>
  <?php
$a=10;
$b=2;
echo "Adição:".($a + $b);
echo "<br>Subtração:".($a - $b);
echo "<br>Multiplicação:".($a * $b);
echo "<br>Divisão:".($a / $b);
echo "<br>Módulo:".($a % $b);
echo "<br>Exponenciação:".($a ** $b);
?>
<h2>Operadores de Atribuição</h2>
<?php
$a=10;
$b=2;
$a+=$b;
$b-=5;
echo "a = ".$a;
echo "<br>b = ".$b;
$c=11;
$d=6;
$c%=$d;
$d+=$a;
echo "<br>c = ".$c;
echo "<br>d = ".$d;
?>
<h3>Operadores de String</h3>
<?php
$a = "Maria ";
echo "$a <br>";//Maria
$b = "Leopoldina ";
echo "$b <br>";//Leopoldina
echo $a . $b;// Maria Leopoldina
$b .= $a;//$b=Leopoldina Maria
echo "<br>$b";//Leopoldina Maria
?>
<h4>Operadores de Incremento/Decremento</h4>
<?php
$x = 100;
echo "x = ".++$x;//101
echo "<br>x final = ".$x;//101
?>
echo "<hr>";
$i=10;
echo "<be>i = $i";//10
  $i++;11
  $i++;12
  ++$i;13
  ++$i;14
echo "<br>i = $i";//
$i--;
$i--;
--$i;
echo "<br>i = $i";//
?>



<h5>Operadores de Comparação</h5>
<?php
$a=10;
$b="10";
echo "Igualdade = ".($a==$b)."<br>";
echo "Idêntico = ".($a===$b)."<br>";
echo "Não igual = ".($a!=$b)."<br>";
echo "Não Idêntico = ".($a!==$b)."<br>";
?>
<?php
$a=10;
$b=10;
$c=11;
echo "Menor: ".($a<$b)."<br>";
echo "Menor ou igual: ".($a<=$b)."<br>";
echo "Maior: ".($c>$b)."<br>";
echo "Maior ou igual: ".($c>=$b)."<br>";
?>

<h6>Operadores Lógicos</h6>

<h7>Operador ternário</h7>
<?php
$a=50;
$b=120;
$c=200;
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";
?>

    
</body>
</html>