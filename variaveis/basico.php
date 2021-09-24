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


?>