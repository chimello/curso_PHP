<div class="titulo">Operadores Lógicos PHP</div>

<?php

    echo "<p class='divisao'>Verdadeiro Ou Falso</p>";
    var_dump(true);
    echo "<br>";
    var_dump(!true);
    echo "<br>";
    var_dump(!!!true);
    echo "<br>";

    echo "<p class='divisao'>Tabela Verdade AND (E)</p>";
    var_dump(true && true);
    echo "<br>";
    var_dump(true && false);
    echo "<br>";
    var_dump(false && true);
    echo "<br>";
    var_dump(false && false);
    echo "<br>";

    echo "<p class='divisao'>Tabela Verdade OR (OU)</p>";
    var_dump(true || true);
    echo "<br>";
    var_dump(true || false);
    echo "<br>";
    var_dump(false || true);
    echo "<br>";
    var_dump(false || false);
    echo "<br>";

    echo "<p class='divisao'>Tabela Verdade XOR (OU Exclusivo)</p>";
    var_dump(true xor true);
    echo "<br>";
    var_dump(true xor false);
    echo "<br>";
    var_dump(false xor true);
    echo "<br>";
    var_dump(false xor false);
    echo "<br>";

    echo "<p class='divisao'>Exemplo</p><hr>";
    $idade = 65;
    $sexo = 'M';

    $pagouPrevidencia = true;
    $criterioMulher = ($idade >= 60 && $sexo === 'F');
    $criterioHomem = ($idade >= 65 && $sexo === 'M');
    $atingiuCriterio = $criterioMulher || $criterioHomem;
    $podeSeAposentar = $pagouPrevidencia && $atingiuCriterio; //retorna true ou false

    if($podeSeAposentar) {
        echo "Pode se Aposentar! -> {$sexo}<br>";
    } else if ($podeSeAposentar) {
        echo "Pode se Aposentar! -> {$sexo}<br>";
    } else {
        echo "Vai ter que trabalhar mais um pouco...<br>";
    }

?>
