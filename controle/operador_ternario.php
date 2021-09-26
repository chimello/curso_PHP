<div class="titulo">Operador Ternário PHP</div>

<?php

    $idade = 70;
    $status;

    $status = $idade >= 18 ? 'Maior de Idade' : 'Menor de Idade';
    echo "{$status}<br>";

    //pouco legivel
    $status = $idade >= 18 ? 
                    $idade >= 65 ? 'Aposentado' : 'Maior de Idade'
              : 'Menor de Idade';
    echo "{$status}<br>";
    //end
?>