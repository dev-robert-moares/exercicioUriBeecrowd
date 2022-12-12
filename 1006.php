<?php 

$A = fgets(STDIN);
$B = fgets(STDIN);
$C = fgets(STDIN);

$media = ((2 * $A) + (3 * $B) + (5 * $C)) / (2 + 3 + 5);

echo "MEDIA = " . number_format($media, 1, ".", "") . PHP_EOL;