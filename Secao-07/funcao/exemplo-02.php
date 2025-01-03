<?php

function sal() {
    return 946.00;
}

echo 'José recebeu três salários: R$'. number_format(sal() * 3, 2, ',', '.') .'<br>';

?>