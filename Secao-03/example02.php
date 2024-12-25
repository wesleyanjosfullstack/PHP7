<?php
$birthYear = 1998;
$fullName = '';
$firstName = 'Wesley';
$lastName = 'Anjos';
$fullName = $firstName.$lastName;
echo $firstName. '<br>';
echo $fullName. '<br>';
// Sai do código para não executar as proximas linhas.
exit;

// Limpa uma variável
unset($firstName);

if (isset($firstName)) echo 'Existe !<br>';
else echo 'Não existe !<br>';