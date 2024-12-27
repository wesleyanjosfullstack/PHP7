<?php

$t = 150;
$off = 0.9;

do {
    $t *= $off;
} while ($t > 100);

echo 'Valor com desconto de 10% é R$'. number_format($t, 2, ',', '.');

?>