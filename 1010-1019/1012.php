<?php 

$entrada = readline();
$valores = explode(" ", $entrada, 3);
$A = $valores[0];
$B = $valores[1];
$C = $valores[2];
const PI = 3.14159;
$trianguloRetangulo = ($A * $C) / 2;
$areaCirculo = PI * pow($C, 2);
$areaTrapezio = 0.5 * $C * ($A +$B);
$areaQuadrado = $B * $B;
$areaRetangulo = $B * $A;

echo "TRIANGULO: " . number_format($trianguloRetangulo, 3, ".", "") . PHP_EOL;
echo "CIRCULO: " . number_format($areaCirculo, 3, ".", "") . PHP_EOL;
echo "TRAPEZIO: " . number_format($areaTrapezio, 3, ".", "") . PHP_EOL;
echo "QUADRADO: " . number_format($areaQuadrado, 3, ".", "") . PHP_EOL;
echo "RETANGULO: " . number_format($areaRetangulo, 3, ".", "") . PHP_EOL;
?>