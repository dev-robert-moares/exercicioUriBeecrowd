<?php 

$entrada1 = readline();
$entrada2 = readline();

$peca1 = explode(" ", $entrada1, 3);
$peca2 = explode(" ", $entrada2, 3);

$valorAPagar = ($peca1[1] * $peca1[2]) + ($peca2[1] * $peca2[2]);

echo "VALOR A PAGAR: R$ " . number_format($valorAPagar, 2, ".", "") . PHP_EOL;
?>