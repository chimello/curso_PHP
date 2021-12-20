<div class="titulo">Recursividade PHP</div>

<?php

    function somaUmAte($numero) {
        $soma = 0;
        for($i = 1; $i <= $numero; $i++) {
            $soma += $i;
        }
        return $soma;
    };

    echo somaUmAte(150) . '<br>';

    function somaRecursivaUmAte($numero) {
        //condição de parada!
        if($numero === 1) {
            return 1;
        }
        //problema recursivo
        return $numero + somaRecursivaUmAte($numero -1);
    };

    echo somaRecursivaUmAte(150) . '<br>';

    function somaRecursivaEconomica($numero) {
        return $numero === 1 ? 1 : 
               $numero + somaRecursivaEconomica($numero -1);
    };

    echo somaRecursivaEconomica(150) . '<br>';

?>