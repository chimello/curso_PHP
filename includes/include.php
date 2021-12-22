<div class="titulo">Include PHP</div>

<?php

    echo 'Executei essa linha do arquivo include<br>';
    include('include_arquivo.php');
    // include('include_arquivo.php');

    echo soma(3, 8);
    echo '<br>';
    echo "O conteúdo da variável é: {$variavel}";

?>