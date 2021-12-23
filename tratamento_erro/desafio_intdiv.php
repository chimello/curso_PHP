<?php namespace Aritmetica;

use Exception;

/*

Sobreescreva o método INTDIV para;;;
Lançar uma exceção quando tentar dividir por zero
Lançar uma exceção quando o resultado não for inteiro
Dividir normalmente nos demais casos

Os Testes:
IntDiv com os parametros 8 e 2 [Sucesso]
IntDiv com os parametros 8 e 3 [Exceção]
IntDiv com os parametros 8 e 0 [Exceção]
IntDiv "original" com os parametros 8 e 3 [Sucesso]

*/
?>

<?php

    class NaoInteiroException extends \Exception {
        
    }

    function intdiv($a, $b) {
        if($b == 0) {
            throw new \DivisionByZeroError();
        }

        if($a % $b > 0) {
            throw new NaoInteiroException();
        }

        return $a / $b;
    }


?>