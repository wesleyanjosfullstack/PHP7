<?php
$name = (int) $_GET['a'];
$name1 = $_GET['b'];
var_dump($name);
var_dump($name1);
echo '<br>';

// Pegando o IP do provedor de acesso do usuário.
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip .'<br>';
// Arquivo acessado
$ip = $_SERVER['SCRIPT_NAME'];
echo $ip .'<br>';