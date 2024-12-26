<?php

$text = 'A repetição é mãe da retenção.';
$word = 'mãe';

$query = mb_strpos($text, $word);
$result = mb_substr($text, 0, $query);
var_dump($result);

$text2 = mb_substr($text, $query + mb_strlen($word), mb_strlen($text));
echo '<br>';
var_dump($text2);

?>