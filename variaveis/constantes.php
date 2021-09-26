<div class="titulo">Constrantes PHP</div>

<?php

    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS;
    echo '<br>'. $TAXA_DE_JUROS . '!';
    // TAXA_DE_JUROS = 2.5;

    const NOVA_TAXA = 2.5;
    echo '<br>' . NOVA_TAXA;

    $valorVariavel = 2.8;
    //define('NOVISSIMA_TAXA', $valorVariavel);
    //const NOVISSIMA_TAXA = $valorVariavel;
    const NOVISSIMA_TAXA = 2.8 + 1.2;
    echo '<br>' . NOVISSIMA_TAXA;

    echo '<br>' . PHP_VERSION;
    echo '<br>' . PHP_INT_MAX;

    echo '<br> Linha: ' . __LINE__;
    echo '<br> Diretório: ' . __DIR__;
    echo '<br> Arquivo: ' . __FILE__;

?>