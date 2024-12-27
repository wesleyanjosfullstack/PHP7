<?php

$months = [
    'Janeiro', 'Fevereiro', 'Março', 'Abril', 
    'Maio', 'Junho', 'Julho', 'Agosto', 
    'Setembro', 'Outubro', 'Novembro', 'Dezembro'
];

foreach ($months as $month) echo 'O mês é '. $month .'<br>';

echo '<hr>';

foreach ($months as $index => $month) {
    echo 'No indice: '. $index .', o mês é '. $month .'<br>';
}

?>