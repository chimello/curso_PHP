<div class="titulo">Membros Estáticos PHP</div>

<?php

use A as GlobalA;

class A {
        public $naoStatic = 'Variável de instância';
        public static $static = 'Variável de classe (estática)';

        public function mostrarA() {
            echo "{$this->naoStatic}<br>";
            //echo "Estática = {$this->static}";
            echo "Estática = " . self::$static . "<br>";
        }

        public static function mostrarStaticA() {
            echo "Estática = " . self::$static . "<br>";
        }
    }

    $a = new A();
    $a->mostrarA();
    $a->mostrarStaticA(); //não é o ideal
    echo A::$static, '<br>'; //acessar diretamente pela classe
    A::mostrarStaticA(); //acessar diretamente pela classe

    A::$static = 'Alterado Membro de classe';
    echo A::$static, '<br>';

?>