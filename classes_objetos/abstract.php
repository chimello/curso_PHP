<div class="titulo">Classe Abstrata PHP</div>

<?php

    abstract class Abstrata {
        public abstract function metodo1();
        abstract protected function metodo2($parametro);
    }

    abstract class FilhaAbstrata extends Abstrata {
        public function metodo1()
        {
            echo "Executando Método 1 <br>";
        }

        abstract public function metodo3();
    }

    class Concreta extends FilhaAbstrata {
        public function metodo1() {
            echo "executando método 1 extendido <br>";
            parent::metodo1();
        }

        protected function metodo2($parametro)
        {
            echo "executando método 2 com parâmetro $parametro <br>";
        }

        public function metodo3() {
            echo "executando metodo 3<br>";
            $this->metodo2('interno');
        }
    }

    $c = new Concreta();
    $c->metodo1();
    // $c->metodo2('externo');
    $c->metodo3();
    echo "<br>";
    var_dump($c instanceof Concreta);
    echo "<br>";
    var_dump($c instanceof FilhaAbstrata);
    echo "<br>";
    var_dump($c instanceof Abstrata);
    
    echo "Fim!";

?>