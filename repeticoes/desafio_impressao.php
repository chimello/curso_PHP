<div class="titulo">Desafio Impressão PHP</div>

<!--
    Enunciado:
    Imprima apenas os valores do array que contem indice par
    desafio adicional: resolver com for e foreach
    valores esperados: AAA, CCC, EEE
-->

<?php

    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];

    for ($i=0; $i < count($array); $i++) { 
        if($i % 2 !== 0) {
            continue;
        };
        if ($i % 2 === 0) {
            echo "indice: $i => $array[$i] <br>";
        };
    };

    echo "<br>";
    echo "Fim FOR!";
    echo "<hr>";

    foreach($array as $chave => $valor) {
        if($chave % 2 !== 0) {
            continue;
        };
        if ($chave % 2 === 0) {
            echo "indice: $chave => $valor <br>";
        };
    }

    echo "<br>";
    echo "Fim FOREACH!";
    echo "<hr>";

?>
