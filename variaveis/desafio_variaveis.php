<div class="titulo">Desafio Variáveis PHP</div>

<?php

    $a = 'Nossa';
    $Nossa = 'Eu';
    $Eu = 'consegui';
    $consegui = 'responder';
    $responder = 'esse';
    $esse = 'desafio';

    echo "Nossa! Eu consegui responder esse desafio.". "<br>";

    //permitido utilizar somente a variável $a.

    echo "{$a}! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";

?>