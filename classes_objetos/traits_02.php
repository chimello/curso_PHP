<div class="titulo">Traits 02 PHP</div>

<?php

    trait validacao {
        public function validarString($str) {
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor {
        public function validarString($str) {
            return isset($str) && trim($str);
        }
    }

?>