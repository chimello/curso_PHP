<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma String!', '<br>';
    var_dump("Eu também!");
    echo '<br>';

    // concatenação
    echo 'Eu '.'Estou '.'Sendo '.'Concatenado ', '<br>';
    echo "também aceito ", "virgulas", '<br>';

    echo "'Teste' ". '"Teste" '. '\'Teste\' '. "\"Teste\"";

    print("<br> Também existe a função print!");
    print "<br> Também existe a função print sem parenteses!";

    // algumas funções
    echo '<br>'. strtoupper('maximizado');
    echo '<br>'. strtolower('MINIMIZADO');
    echo '<br>'. ucfirst('só a primeira letra');
    echo '<br>'. ucwords('todas as palavras');
    echo '<br>'. strlen('Quantas Letras?');
    echo '<br>'. mb_strlen('Eu também!', "utf-8");
    echo '<br>'."Só uma parte mesmo: ". substr('Só uma parte mesmo', 7, 6);
    echo '<br>'.'Trocar isso por aquilo: '. str_replace('isso', 'aquilo', 'Trocar isso');
?>
