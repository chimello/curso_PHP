<div class="titulo">Polimorfismo PHP</div>

<?php

    abstract class Comida {
        public $peso;
    }

    class Arroz extends Comida {

    }
    
    class ArrozAGrega extends Arroz {

    }

    class Feijao extends Comida {

    }

    class Sorvete extends Comida {

    }

    class Pessoa {
        public $peso;

        function __construct($peso) {
            $this->peso = $peso;
        }

        public function comer(Comida $comida) {
            $this->peso += $comida->peso;
        }
    }

    $comida = new Arroz();
    $comida2 = new Sorvete();
    $pessoa = new Pessoa(65.00);
    $comida->peso = 0.65;
    $comida2->peso = 0.65;

    echo $pessoa->peso;
    echo "<br>";
    $pessoa->comer($comida);
    echo $pessoa->peso;
    echo "<br>";
    $pessoa->comer($comida2);
    echo $pessoa->peso;
    echo "<br>";

?>