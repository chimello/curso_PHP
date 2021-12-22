<div class="titulo">Include Once PHP</div>

<?php

    include('include_once_arquivo.php');
    // require('include_once_arquivo.php');

    echo $variavel;
    echo '<br>';
    $variavel = 'Variável Alterada';
    echo $variavel;
    echo '<br>';
    
    //vai reinicializar a variável
    include('include_once_arquivo.php');
    echo $variavel;
    echo '<br>';
    $variavel = 'Variável Alterada';
    echo $variavel;
    echo '<br>';
    include_once('include_once_arquivo.php');
    echo $variavel;
    echo '<br>';
    
    require_once('include_once_arquivo.php');
    echo $variavel;
    echo '<br>';

?>