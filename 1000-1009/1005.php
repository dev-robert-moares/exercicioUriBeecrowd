<?php 

$A = fgets(STDIN);
$B = fgets(STDIN);
$P1 = 3.5;
$P2 = 7.5;

$media = ($P1 * $A + $P2 * $B) / ($P1 + $P2);

echo "MEDIA = " . number_format($media, 5, ".", "") . PHP_EOL;