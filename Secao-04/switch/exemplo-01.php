<?php

$dayWeek = date('w');

switch($dayWeek) {
    case 0: echo 'Domingo !<br>'; break;
    case 1: echo 'Segunda-feira !<br>'; break;
    case 2: echo 'Terça-feira !<br>'; break;
    case 3: echo 'Quarta-feira !<br>'; break;
    case 4: echo 'Quinta-feira !<br>'; break;
    case 5: echo 'Sexta-feira !<br>'; break;
    case 6: echo 'Sabado !<br>'; break;
    default: echo 'Não encontrado'; break;
}

?>