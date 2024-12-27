<form>
    <input type="text" name="name" autocomplete="name" placeholder="Digite seu nome">
    <input type="date" name="birth">
    <input type="submit" value="OK">
</form>

<?php

if (isset($_GET)) foreach ($_GET as $key => $value) echo 'Nome do campo: '. $key .'<br>Valor do campo: '. $value .'<hr>';

?>