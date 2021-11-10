<div class="titulo">Argumento Padrão PHP</div>

<?php

    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
        return "Bem Vindo, $nome $sobrenome!<br>";
    }

    echo saudacao();
    echo saudacao(null);
    echo saudacao(null, null);
    echo saudacao('João', 'Chimello');

    function anotarPedido($comida, $bebida = 'Água') { //utilizar o parametro padrão como ultimo parametro
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    echo '<hr>';
    anotarPedido('Hamburrguer');
    echo '<hr>';
    anotarPedido('Pizza', 'Refrigerante');

    function anotarPedido2($bebida = 'Água', $comida) {
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>"; 
    }

    echo '<hr>';
    //anotarPedido2('Hamburguer'); //gera erro pois o padrão é o primeiro
    anotarPedido2('Refrigerante', 'Pizza');

?>