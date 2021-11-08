<div class="titulo">Arrays Constantes</div>

<?php

    const FRUTAS = array('laranja', 'abacaxi');
    //FRUTAS[0] = 'banana'; não permite
    //FRUTAS[] = 'banana'; // não permite

    echo FRUTAS[0];

    const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
    //CARROS["BMW"] = "325i";
    echo '<br>' . CARROS["Fiat"];

    define('CIDADES', array('Belo Horizonte', 'Recife'));
    //CIDADES[] = 'Rio de Janeiro';
    echo '<br>' . CIDADES[1];

    
?>