<div class="titulo">Escrever Arquivo PHP</div>

<?php

    $arquivo = fopen('teste.txt', 'w');
    fwrite($arquivo, "Valor Inicial\n");
    $str = "Segunda Linha\n";
    fwrite($arquivo, $str);
    fclose($arquivo);

    $arquivo = fopen('teste.txt', 'w');
    fwrite($arquivo, "Novo Conteúdo\n");
    fclose($arquivo);

    $arquivo = fopen('teste.txt', 'a');
    fwrite($arquivo, "Com novos valores\n");
    fwrite($arquivo, "Adicionados em um segundo Momento");
    fclose($arquivo);
    
    ini_set('display_errors', 1);
    $arquivo = fopen('teste.txt', 'x');
?>