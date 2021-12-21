<div class="titulo">Herança PHP</div>

<?php

use Pessoa as GlobalPessoa;

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

    class Usuario extends Pessoa {
        public $login;
        
        function __construct($nome, $idade, $login)
        {
            parent::__construct($nome, $idade);
            $this->login = $login;
            echo "Usuário Criado! <br>";
        }

        function __destruct()
        {
            echo "Usuário diz Tchau!<br>";
            parent::__destruct();
        }

        public function apresentar() {
            parent::apresentar();
            echo " Login: @{$this->login}<br>";
        }
    }

    $usuario = new Usuario('João Chimello', 25, 'chimello');
    $usuario->apresentar();
    unset($usuario);

?>