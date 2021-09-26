<div class="titulo">Operadores Relacionais</div>

<?php

    var_dump(1 == 1);
    echo "<br>";
    var_dump(1 > 1);
    echo "<br>";
    var_dump(1 >= 1);
    echo "<br>";
    var_dump(1 != 1);
    echo "<br>";
    var_dump(1 <> 1);
    echo "<br>";
    var_dump(1 == '1');
    echo "<br>";
    var_dump(1 === '1');
    echo "<br>";

    echo "<p>Relacionais no If/Else</p><hr>";
    $idade = 80;

    if($idade < 18) {
        echo "Menor de Idade = {$idade} anos!<br>";
    } else if ($idade <= 65) {
        echo "Adulto = {$idade} anos!<br>";
    } else {
        echo "Terceira Idade = {$idade} anos!<br>";
    }

?>