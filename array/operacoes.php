<div class="titulo">Operações PHP</div>

<?php

    $dados1 = [
        "nome" => "José",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "Fortaleza"
    ];

    $dadosCompletos = $dados1 + $dados2; //dados1 tem prioridade desta forma.

    print_r($dadosCompletos);

    $dado = 1;
    echo '<br>' . is_array($dadosCompletos); //verifica se é array
    echo '<br>' . count($dadosCompletos); //contar array

    echo '<br>';
    $indice = array_rand($dadosCompletos); //pegar indice de forma randomica
    echo "$indice = $dadosCompletos[$indice]";
    echo '<br>';
    echo "{$dadosCompletos['idade']}";
    echo " ${dadosCompletos['idade']}";

    unset($dadosCompletos["nome"]); //remove elementos od array
    echo '<br>';
    print_r($dadosCompletos);
    unset($dadosCompletos); //libera memória
    print_r($dadosCompletos);
    echo '<br>';
    var_dump($dadosCompletos);

    $impares = [1,3,5,7,9];
    $pares = [0,2,4,6,8];
    $decimais = $pares + $impares; //junção com operador (não recomendado)

    echo '<br>';
    print_r($decimais);

    $decimais = array_merge($pares, $impares); //junta arrays (forma correta)
    echo '<br>';
    print_r($decimais);

    sort($decimais); //ordenação
    echo '<br>';
    print_r($decimais);

?>