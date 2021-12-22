<div class="titulo">Magic Methods</div>

<?php

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            echo "Construtor Invocado!<br>";
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo "<br>Destruído!<br>";
        }

        public function __toString() {
            return "{$this->nome} tem {$this->idade} anos.";
        }

        public function apresentar() {
            echo $this . "<br>";
        }

        public function __get($atrib) {
            echo "Lendo atributo não declarado: {$atrib}<br>";
        }

        public function __set($atrib, $valor) {
            echo "Alterando atributo não declarado: {$atrib}/ Valor: {$valor}<br>";
        }

        public function __call($name, $arguments) {
            echo "Tentando Executar o método '${name}'.";
            echo "<br> com os parametros: ";
            print_r($arguments);
        }
    }

    $pessoa = new Pessoa("João Chimello", 25);
    $pessoa->apresentar(); //chamando o __toString

    echo $pessoa . '<br>'; //chamando o __toString
    $pessoa->nome = 'Stefani';
    //chama o metodo diretamente sem o __call
    $pessoa->apresentar(); //chamando o __toString
    echo '<hr>';

    $pessoa-> nomeCompleto = "Legal!"; //__set
    $pessoa->nomeCompleto; //__get
    echo $pessoa->nome; //acessa o atributo diretamente sem o __get
    echo '<br>';

    $pessoa->exec("1", 2, 3.3); // __call

    $pessoa = null;

?>