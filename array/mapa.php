<div class="titulo">Mapa</div>

<?php

    $dados = array (
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );

    print_r($dados["idade"]);
    echo '<br>';
    print_r($dados["cor"]);
    echo '<br>';
    print_r($dados["peso"]);
    echo '<br>';

    $lista = array (
        "a",
        "cinco" => "b",
        "c",
        "seis" => "c"
    );

    print_r($lista);
    echo '<br>';

    $lista[] = 'i';
    print_r($lista);
?>