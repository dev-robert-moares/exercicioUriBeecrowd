<?php 

$raio = readline();
const PI = 3.14159;
$volume = (4.0/3) * PI * pow($raio, 3);

echo "VOLUME = " . number_format($volume, 3, ".", "") . PHP_EOL;
?>