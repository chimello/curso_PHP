<div class="titulo">Usando Tipos PHP</div>
<?php

    function somar1($a, $b) {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar1(1,2) . '<br>';
    echo somar1(1.7,2.5) . '<br>';
    echo somar1(1,'4dois') . '<br>';
    echo '<hr>';

    function somar2 (int $a, int $b) {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar2(1,2) . '<br>';
    echo somar2(1.7,2.5) . '<br>';
    echo somar2(1,'4dois') . '<br>';
    echo '<hr>';

    function somar3($a, float $b): int {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }
    
    echo somar3(1,2) . '<br>';
    echo somar3(1.7,2.5) . '<br>';
    echo somar3(1,'4dois') . '<br>';
    echo '<hr>';

?>