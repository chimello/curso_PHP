<div class="titulo">Desafio Palindromo PHP</div>

<?php

    function palindromo($palavra) {
        $ultimoIndice = strlen($palavra) -1;
        for ($i=0; $i < $ultimoIndice; $i++) { 
            if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
                return "Não é um palindromo!";
            }
        }
        return "Sim, é um palindromo!";
    }

    echo palindromo('ana') . '<br>';
    echo palindromo('joao') . '<br>';
    echo '<hr>';

    function palindromoSimples($palavra) {
        return $palavra === strrev($palavra) ? "Sim!" : "Não!";
    }

    echo palindromoSimples('ana') . '<br>';
    echo palindromoSimples('joao') . '<br>';
    echo palindromoSimples('arara') . '<br>';

?>