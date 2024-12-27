<?php

$age = 80;
$ageKid = 12;
$ageMayor = 18;
$ageMature = 65;

if ($age < $ageKid) echo 'Criança !<br>';
else if ($age < $ageMayor) echo 'Adolecente !<br>';
else if ($age < $ageMature) echo 'Adulto !<br>';
else echo 'Idoso !<br>';

?>