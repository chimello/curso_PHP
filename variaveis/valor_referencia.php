<div class="titulo">Valor vs Referência PHP</div>

<?php

    $variavel = 'valor inicial';
    echo $variavel . '<br>';

    //atribuição por valor
    $variavelValor = $variavel;
    echo $variavelValor . '<br>';

    $variavelValor = 'novo valor';
    echo "$variavel ";
    echo $variavelValor . '<br>';

    //atribuição por referencia
    $variavelReferencia = &$variavel;
    echo "{$variavelReferencia}" . "<br>";
    $variavelReferencia = 'mesma referencia';
    echo "{$variavelReferencia}" . "<br>";

    echo "$variavel $variavelReferencia";
?>