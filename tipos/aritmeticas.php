<div class="titulo">Operações Aritméticas</div>

<?php
    echo 'Soma: ', 1 + 1, '<br>';
    echo 'Tipo valor: ', var_dump(1 + 1), '<br>';
    echo 'Soma Com Float: ', 1 + 2.5, '<br>';
    echo 'Subtração: ', 10 - 2, '<br>';
    echo 'Multiplicação: ', 2 * 5, '<br>';
    echo 'Divisão: ', 7 / 4, '<br>';
    echo 'Divisão inteira: ', intdiv(7,4), '<br>';
    echo 'Arredondar: ', round(7 / 4), '<br>';
    echo 'Resto: ', 7 % 4, '<br>';
    echo 'Divisão por zero: ', 7 / 0, '<br>';
    //echo intdiv(7,0); #erro!
    echo 'Elevado: ', 4 ** 2, '<br>';

    // precedencia de operadores:
    // () => ** => / * % => + -

    echo '<p>Precedência</p>';
    echo '2 + 3 * 4 = ', 2 + 3 * 4, '<br>';
    echo '(2 + 3) * 4 = ', (2 + 3) * 4, '<br>';
    echo '2 + 3 * 4 ** 2 = ', 2 + 3 * 4 ** 2, '<br>';
    echo '((2 + 3) * 4) ** 2 = ', ((2 + 3) * 4) ** 2, '<br>';
    
?>