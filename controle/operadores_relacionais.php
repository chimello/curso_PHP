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

    echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
    $idade = 80;

    if($idade < 18) {
        echo "Menor de Idade = {$idade} anos!<br>";
    } else if ($idade <= 65) {
        echo "Adulto = {$idade} anos!<br>";
    } else {
        echo "Terceira Idade = {$idade} anos!<br>";
    }

    echo "<p class='divisao'>SpaceShip</p><hr>";
    var_dump(5 <=> 3); //da esquerda é maior, retorna 1
    echo "<br>";
    var_dump(50 <=> 50); //níumeros iguais, retorna 0
    echo "<br>";
    var_dump(3 <=> 5); //da direita é maior, retorna -1
    echo "<br>";
    echo "<p class='divisao'>Valores podem ser Verdadeiro ou Falso</p><hr>";
    var_dump(!!5); //true
    echo "<br>";
    var_dump(!!0); //false
    echo "<br>";
    var_dump(!!""); //false
    echo "<br>";
    var_dump(!!" "); //true
    echo "<br>";

?>

