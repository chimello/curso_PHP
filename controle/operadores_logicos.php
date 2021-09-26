<div class="titulo">Operadores Lógicos PHP</div>

<?php

    echo "<p>Verdadeiro Ou Falso</p>";
    var_dump(true);
    echo "<br>";
    var_dump(!true);
    echo "<br>";
    var_dump(!!!true);
    echo "<br>";

    echo "<p>Tabela Verdade AND (E)</p>";
    var_dump(true && true);
    echo "<br>";
    var_dump(true && false);
    echo "<br>";
    var_dump(false && true);
    echo "<br>";
    var_dump(false && false);
    echo "<br>";

    echo "<p>Tabela Verdade OR (OU)</p>";
    var_dump(true || true);
    echo "<br>";
    var_dump(true || false);
    echo "<br>";
    var_dump(false || true);
    echo "<br>";
    var_dump(false || false);
    echo "<br>";

    echo "<p>Tabela Verdade XOR (OU Exclusivo)</p>";
    var_dump(true xor true);
    echo "<br>";
    var_dump(true xor false);
    echo "<br>";
    var_dump(false xor true);
    echo "<br>";
    var_dump(false xor false);
    echo "<br>";

?>

<style>
    p {
        margin-bottom: 0px;
        font-weight: bold;
    }
    hr {
        margin-top: 0px;
    }
</style>