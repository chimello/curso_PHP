<div class="titulo">Argumentos & Retornos PHP</div>

<?php

    function obterMensagem() {
        return 'Seja bem vindo(a)!';
    }

    obterMensagem();
    $m = obterMensagem();
    echo $m;
    echo '<br>' . obterMensagem() . '<br>';
    var_dump(obterMensagem());

    function obterMensagemComNome($nome) {
        return "Bem vindo(a), {$nome}!";
    }

    echo '<br>', obterMensagemComNome('João');
    echo '<br>', obterMensagemComNome('Stefany');

    function soma($val1, $val2) {
        return $val1 + $val2;
    }

    $x = 4;
    $y = 5;
    echo '<br>', soma(3,5);
    echo '<br>', soma(45,78);
    echo '<br>', soma($x, $y);

    function trocarValor($a, $novoValor) {
        $a = $novoValor;
    }

    $variavel = 1;
    trocarValor($variavel, 3);
    echo '<br>' . $variavel;

    function trocarValorDeVerdade(&$a, $novoValor) { //recebe a referencia e não a copia, ai altera de vdd
        $a = $novoValor;
    }

    trocarValorDeVerdade($variavel, 5);
    echo '<br>' . $variavel;

?>