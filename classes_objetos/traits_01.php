<div class="titulo">Traits 01 PHP</div>

<?php

    trait validacao {
        public $a = 'Valor A';
        public function validarString($str) {
            return isset($str) && $str !== '';
        }
    }
    
    trait validacaoMelhor {
        public $b = 'Valor B';
        private $c = 'Valor C (Privado)';
        public function validarStringMelhor($str) {
            return isset($str) && trim($str);
        }
    }

    class Usuario {
        use validacao, validacaoMelhor;

        public function imprimirValorC() {
            echo '<br>', $this->c;
        }
    }

    $usuario = new Usuario('','',''); //não sei pq precisa, mas se não colocar fica com erro e roda normal
    var_dump($usuario->validarString(' '));
    echo '<br>';
    var_dump($usuario->validarStringMelhor(' '));
    echo '<br>';
    echo $usuario->a, '<br>', $usuario->b;
    echo $usuario->imprimirValorC();

?>