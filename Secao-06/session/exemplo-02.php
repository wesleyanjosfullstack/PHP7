<?php

require_once './config.php';

unset($_SESSION['name']);

echo $_SESSION['name'];

session_destroy();

?>