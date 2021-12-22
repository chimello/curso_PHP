<div class="titulo">Include VS Require PHP</div>

<?php

    echo 'Usando include com arquivo inexistente...<br>';
    ini_set('display_errors', 1);
    include('arquivo_inexistente.php');
    echo 'Usando include com arquivo inexistente...<br>';

    echo 'Usando Require com arquivo inexistente...<br>';
    require('arquivo_inexistente.php');

    echo 'Não achou mesmo...<br>';

?>