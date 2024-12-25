<?php

$name = 'Wesley';

function test() {
    global $name;
    echo $name. '<br>';
}

function test2() {
    $name = 'Pedro';
    echo $name. ' agora no teste2';
}

test();
test2();
?>