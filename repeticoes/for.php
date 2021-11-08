<div class="titulo">Laço FOR</div>

<?php

    for($cont = 1; $cont <=5; $cont++) {
        echo "$cont <br>";
    };

    echo "<hr>";

    for(; $cont <= 10; $cont++) {
        echo "$cont <br>";
    }

    echo '<hr>';

    //não recomendado!!!
    for (; $cont <= 15;) {
        echo "$cont <br>";
        $cont++;
    }

    echo '<hr>';
    $array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábabo'];
    print_r($array);
    echo '<br>';
    echo '<hr>';

    for($i = 0; $i < count($array); $i++) {
        print_r($array[$i]);
        echo '<br>';
    }

    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b','c','d']
    ];

    echo '<hr>';
    for($i = 0; $i < count($matrix);$i++) {
        for($j = 0; $j < count($matrix[$i]); $j++) {
            echo "{$matrix[$i][$j]} ";
        };
        echo "<br>";
    };

?>