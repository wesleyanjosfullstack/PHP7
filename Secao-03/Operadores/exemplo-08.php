<?php

$r = (10 + 3) / 2;
echo $r .'<br>';

$r = (10 + 3) / 2 > 5;
echo $r .'<br>';

$r = (10 + 3) / 2 > 5 && 10 + 5 < 3;
var_dump($r);
echo '<br>';

$r = (10 + 3) / 2 > 5 && 10 + 5 < 20;
var_dump($r);
echo '<br>';

$r = (10 + 3) / 2 > 5 || 10 + 5 < 20;
var_dump($r);
echo '<br>';

?>