<div class="titulo">Função Escopo PHP</div>

<?php

    function imprimirMensagem() {
        echo "Olá! ";
        echo "Até a próxima!<br>";
    }

    imprimirMensagem();
    imprimirMensagem();
    imprimirMensagem();
    echo '<hr>';

    $variavel = 1;

    function trocarValor() {
        //essa variável pertence somente a função,
        // mesmo tendo o mesmo nome, diferentes endereços de memória
        $variavel = 2; 
        echo "Durante a função: " . $variavel . "<br>";
    }

    echo "Antes: $variavel <br>";
    trocarValor();
    echo "Depois: $variavel <br>";
    echo '<hr>';

    function trocarValorDeVerdade() {
        global $variavel;
        $variavel = 3;
        echo "Durante a função: " . $variavel . "<br>";
    }

    echo "Antes: $variavel <br>";
    trocarValorDeVerdade();
    echo "Depois: $variavel <br>";

?>