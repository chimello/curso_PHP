<div class="titulo">If Else PHP</div>

<?php

    if(true) {
        echo "Serei impresso? <br>";
        echo "Serei impresso novamente? <br>";
    } else {
        echo "Sou falso!";
    };

    if(true) {
        echo "Verdadeiro <br>";
    } else {
        echo "Falso <br>";
    }

    if(false) {
        echo "Passo A<br>";
    } else if (true) {
        echo "Passo B<br>";
    } else {
        echo "Último Passo<br>";
    }

    echo "Fim! <br>"
?>

