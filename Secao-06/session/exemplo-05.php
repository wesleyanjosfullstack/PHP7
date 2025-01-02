<?php

require_once './config.php';

echo session_save_path() .'<br>';

var_dump(session_status());
echo '<br>';

switch(session_status()) {
    case PHP_SESSION_DISABLED:
        echo 'As sessões estiverem desabilitadas.<br>';
        break;
    case PHP_SESSION_NONE:
        echo 'As sessões estiverem habilitadas, mas nenhuma existir..<br>';
        break;
    case PHP_SESSION_ACTIVE:
        echo 'As sessões estiverem habilitadas, e uma existir.<br>';
        break;
    default:
        echo 'Não encontrado.<br>';
        break;
}
?>