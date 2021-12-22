<?php

class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            echo "Pessoa Criada!<br>";
        }

        function __destruct()
        {
            echo 'Pessoa: Tchau!<br>';
        }

        public function apresentar() {
            echo "Nome: {$this->nome}, Idade: {$this->idade} anos<br>";
        }
    }

?>