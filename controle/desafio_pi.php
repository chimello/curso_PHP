<div class="titulo">Desafio PI PHP</div>

<?php

    echo pi();
    $pi = 3.14;

    echo "<br>";
    var_dump($pi);
    echo "<br>";
    var_dump(pi());
    echo "<br>";

    if($pi === pi()) {
        echo "<br>Iguais!";
    } else {
        echo "<br>Diferentes!";
    }

    // Operador Relacional
    $piErrado = 2.8;

    //Solução
    echo '<br>' . ($pi - pi());
    echo '<br>' . ($pi - $piErrado) . '<br>';

    if($pi - pi() <= 0.01) {
        echo "Praticamente Iguais<br>";
    }

    if($pi - $piErrado <= 0.01) {
        echo "Praticamente Iguais<br>";
    } else {
        echo "Valor Diferente do Esperado!<br>";
    }

?>