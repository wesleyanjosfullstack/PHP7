<?php

$json = '[{"name":"Jo\u00e3o","age":20},{"name":"Glaucio","age":25}]';

$data = json_decode($json, true);

var_dump($data);

?>