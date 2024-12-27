<?php

$c = true;

while ($c) {
    $n = rand(1, 10);
    if ($n === 3) {
        echo '<b>TRÊS !!! </b>';
        $c = false;
    }
    echo $n .' ';
}

?>