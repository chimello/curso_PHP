<div class="titulo">Primeira Classe PHP</div>

<?php

    class Cliente {
        // atributos
        public $nome = 'Anônimo';
        public $idade = 18;

        //metodo
        public function apresentar() {
            echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
        }
    }

    $c1 = new Cliente();
    $c1->nome = 'João Chimello';
    $c1->idade = 25;
    $c1->apresentar();

    $c2 = new Cliente();
    $c2->nome = 'Stefani Chimello';
    $c2->idade = 21;
    $c2->apresentar();
?>