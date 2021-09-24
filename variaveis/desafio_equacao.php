<div class="titulo">Desafio Equação</div>

<?php

    $primeiroNumero = 6;
    $segundoNumero = 3;
    $terceiroNumero = 2;

    $quartoNumero = 1;
    $quintoNumero = 5;
    $sextoNumero = 2;
    $setimoNumero = 7;
    $oitavoNumero = 10;

    $primeiraDivisao = (
        (($primeiroNumero * ($segundoNumero + $terceiroNumero)) ** 2) / 
        ($segundoNumero * $terceiroNumero)
    );

    $segundaDivisao = (
        ((($quartoNumero - $quintoNumero) * ($sextoNumero - $setimoNumero)) / 
        ($sextoNumero)) ** 2
    );

    echo 'Primeira Divisão: '. $primeiraDivisao. '<br>';
    echo 'Segunda Divisão: '. $segundaDivisao. '<br>';

    $resultadoPrimeiro = ($primeiraDivisao - $segundaDivisao);

    echo 'Primeira Parte: '. $resultadoPrimeiro. '<br>';

    $resultadoFinal = (
        (($resultadoPrimeiro ** 3) / ($oitavoNumero ** 3))
    );

    echo 'Resultado Final: '. $resultadoFinal. '<br>';
?>
