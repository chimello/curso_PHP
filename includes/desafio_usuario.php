<?php

    require_once('desafio_pessoa.php');

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

    ?>
