<?php namespace contexto;

use const outro_contexto\constante4;

?>
<div class="titulo">Exemplo Básico NameSpace PHP</div>

<?php

    echo __NAMESPACE__ . '<br>';
    const CONSTANTE1 = 123;
    define('contexto\constante2', 234);
    define(__NAMESPACE__. '\constante3', 345);
    define('outro_contexto\constante4', 456);

    echo CONSTANTE1 . '<br>';
    echo constante2 . '<br>';
    //echo contexto\constante3 . '<br>';
    echo \contexto\constante3 . '<br>';
    echo constant(__NAMESPACE__ . '\constante3') . '<br>';
    //echo constante4 . '<br>';
    echo \outro_contexto\constante4 . '<br>';

    function soma($a, $b) {
        return $a + $b;
    }

    echo \contexto\soma(1,2) . '<br>';
    echo soma(1,2) . '<br>';

    function strpos($str, $text) {
        echo "Buscando o texto '{$text}' em '{$str}'<br>";
        return 1;
    }

    echo \strpos('Texto genérico para busca', 'busca'); //busca a que eu implementei
    echo \strpos('Texto genérico para busca', 'busca'); //na raiz (função do PHP)
    
?>