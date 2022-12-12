<?php 

$vendedor = readline();
$salarioFixo = readline();
$totalDeVendas = readline();
$salario = $salarioFixo + ($totalDeVendas * (15/100));

echo "TOTAL = R$ " . number_format($salario, 2, ".", "") . PHP_EOL;
?>