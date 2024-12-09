<?php
$name = "Hcode";
$site = 'www.hcode.com.br';
$year = 1998;
$money = 550099;
$block = false;

// Variáveis composta
$fruit = ['abacaxi', 'laranja', 'mangá'];
foreach ($fruit as $f) echo ucfirst($f) .'<br>';
echo ucfirst($fruit[2]) .'<br>';

$birth = new DateTime();
var_dump($birth);
echo '<br>';

$file = fopen('example03.php', 'r');
var_dump($file);
echo '<br>';

$null = NULL;