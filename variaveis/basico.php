
<div class="titu">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
echo var_dump($numeroA), '<br>';

$a = 3;
echo $a, '<br>';
$b = 16;
echo $a, '<br>';
$somaDosNumeros = $a + $b;
echo $somaDosNumeros, '<br>';

echo isset($somaDosNumeros), '<br>';

unset($somaDosNumeros);
echo !isset($somaDosNumeros), '<br>';
var_dump($somaDosNumeros);

$variavel = 'Agora sou uma String!';
echo '<br>'. $variavel;

// nomes de variavel

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida'; 
$vâr5 = 'valida'; //não recomendado
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';

echo '<br>'. $_SERVER. '<br>';
var_dump($_SERVER["HTTP_HOST"]);
echo '</br>';
?>