<div class="titulo">Try & Catch PHP</div>

<?php

    // echo 7/0; //erro
    // echo intdiv(7, 0); //erro

    try {
        echo intdiv(7,0);
    } catch(Error $e) {
        echo "Teve um erro aqui.<br>";
    }

    try {
        throw new Exception('Um erro muito estranho');
        echo '<br>';
        echo intdiv(7,0);
    } catch(DivisionByZeroError $e) {
        echo 'Divisão por Zero<br>';
    } catch(Throwable $e) {
        echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
    } finally {
        echo "Finalmente terminou!<br>";
    }

    echo "Execução continua...<br>";

?>