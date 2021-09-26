<div class="titulo">Variáveis Variáveis PHP</div>

<?php

    $a = 'valorA';
    $$a = 'valorAA';

    echo "$a {$$a} ${$a} $valorA";

    echo "<br>";
    $epa = 'opa';
    $opa = 'vish';

    echo "$epa";
    echo " $epa {$$epa}";
    echo "<br>";
    
    $vish = 'eita!!!!!';

    echo "$epa {$$epa} {$$$epa}";

?>
