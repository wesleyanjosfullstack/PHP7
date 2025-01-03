<?php

function hello() {
    return 'Hello, World !<br>';
}

echo hello();

$text = hello();
echo 'A frase possui '. mb_strlen($text). ' caracteres.<br>';
echo 'A frase é '. mb_strtoupper($text). '.<br>';

?>