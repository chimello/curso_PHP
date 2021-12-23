<div class="titulo">Gerenciando Sessão PHP</div>

<?php

    // session_id('fmjmcueebmap30o3d28iptaooo');
    session_start();
    echo session_id();

    $contador = &$_SESSION['contador'];
    $contador = $contador ? $contador + 1 : 1;
    echo '<br>';
    echo $_SESSION['contador'];

    if($_SESSION['contador'] % 5 === 0) {
        session_regenerate_id();
        // $contador = 0;
    }

    if($_SESSION['contador'] >= 15) {
        session_destroy();
    }

?>