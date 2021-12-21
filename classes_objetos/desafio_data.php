<div class="titulo">Desafio Data PHP</div>

<?php

    class Data {
        public $dia = 1;
        public $mes = 1;
        public $ano = 1970;

        public function apresentar() {
            if($this->dia < 10) {
                $this->dia = "0". $this->dia;
            } 
            if ($this->mes < 10) {
                $this->mes = "0". $this->mes;
            }
            return "Data Formatada: {$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    $data1 = new Data();
    
    $data2 = new Data();
    $data2->dia = 20;
    $data2->mes = 12;
    $data2->ano = 2021;
    
    echo "Data Padrão: " . $data1->apresentar() . "<br>";
    echo "Data Informada: " . $data2->apresentar() . "<br>";

?>