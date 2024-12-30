<?php

$peoples = [];

array_push($peoples, [
    'name' => 'João',
    'age' => 20
]);

array_push($peoples, [
    'name' => 'Glaucio',
    'age' => 25
]);

print_r($peoples);
echo '<hr>';
print_r($peoples[0]);
echo '<hr>';
print_r($peoples[0]['name']);

?>