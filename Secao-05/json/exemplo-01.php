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

echo json_encode($peoples);

?>