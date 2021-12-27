<div class="titulo">Ler Arquivo PHP</div>

<?php
    // ini_set('display_errors', 1);
    $arquivo = fopen('teste.txt', 'r');
    echo fread($arquivo, 10);
    echo '<br>';
    echo fread($arquivo, 10);
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    $tamanho = filesize('teste.txt');
    echo $tamanho . '<br>';
    echo fread($arquivo, $tamanho);
    fclose($arquivo);

    echo '<br>';

    $arquivo = fopen('teste.txt', 'r');
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    var_dump(FGETS($arquivo));
    echo '<br>';
    fclose($arquivo);
    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    while (!feof($arquivo)) {
        echo fgets($arquivo), '<br>';
    }

    fclose($arquivo);
    
    echo '<hr>';
    $arquivo = fopen('teste.txt', 'r');
    while (!feof($arquivo)) {
        echo fgetc($arquivo);
    }
    echo '<br>';
    fclose($arquivo);
    
    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r+');
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    fwrite($arquivo, "Adicionando durante a leitura do arquivo\n");
    var_dump(fgets($arquivo));
    echo '<br>';
    fclose($arquivo);

    echo "Fim!";

    ?>