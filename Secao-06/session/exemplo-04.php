<?php

session_id('0mvtoeb2mphcjq17c2o00p22rt');

require_once './config.php';

session_regenerate_id();

echo session_id() .'<br>';

var_dump($_SESSION)

?>