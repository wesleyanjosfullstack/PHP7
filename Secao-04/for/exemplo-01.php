<?php

for ($c = 0; $c < 11; $c++) echo $c .' '; 

echo '<hr>';

for ($c = 0; $c <= 1000; $c += 5) echo $c .' '; 
echo '<hr>';

for ($c = 0; $c <= 1000; $c += 5) {
    if ($c > 200 && $c < 800) continue;
    if ($c === 900) break;
    echo $c .' ';
} 

echo '<hr>';

for ($c = 100; $c > 0; $c -= 5) echo $c .' ';

?>