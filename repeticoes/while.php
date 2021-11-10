<div class="titulo">While/Do While PHP</div>

<?php

    const VALOR_LIMITE = 5;
    $contador = 0;

    while($contador < VALOR_LIMITE) {
        echo "while $contador <br>";
        $contador++;
    }

    echo "Fim do While!";
    echo "<hr>";
    
    $contador2 = 0;
    do {
        echo "Do while $contador2 <br>";
        $contador2++;
    } while($contador2 < VALOR_LIMITE);

    echo "Fim do Do While!";
    echo "<hr>";

    $contador3 = 0;

    while (true) {
        echo "while(true) $contador3 <br>";
        $contador3++;
        if($contador3 >= VALOR_LIMITE) break;
    }
    echo "Fim do While(True)!";
    echo "<hr>";
?>