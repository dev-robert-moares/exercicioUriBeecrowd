<?php 

$numeroDoFuncionario = readline();
$horasTrabalhadas = readline();
$valorPorHora = readline();
$salario = $horasTrabalhadas * $valorPorHora;

echo "NUMBER = " . $numeroDoFuncionario . PHP_EOL;
echo "SALARY = U$ " . number_format($salario, 2, ".", "") . PHP_EOL;

?>