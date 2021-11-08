<div class="titulo">Desafio Sorteio PHP</div>

<?php

    $nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

    $indice = array_rand($nomes);
    $resultado = "$nomes[$indice]";

    echo '<br>';
    echo '<div center><h1>' . $resultado . '<h1></div>';

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>