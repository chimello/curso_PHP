<div class="titulo">Construtor & Destrutor</div>

<?php

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($novoNome, $idade = 18) {
            echo 'Construtor Invocado! <br>';
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo 'E Morreu!<br>';
        }

        public function apresentar() {
            echo "{$this->nome}, {$this->idade} anos<br>";
        }
    }

    $pessoa = new Pessoa('João Chimello', 25);
    $pessoa->apresentar();
    unset($pessoa); //destrutor

    $pessoa2 = new Pessoa('Stefani Chimello', 21);
    $pessoa2->apresentar();
    $pessoa2 = null; //destrutor

?>