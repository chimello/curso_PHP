<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE;
    echo '<br>';
    echo FALSE; //não mostra no browser

    echo '<br>'. var_dump(true);
    echo '<br>'. var_dump(false);
    echo '<br>'. var_dump('false');
    echo '<br>'. is_bool(false);
    echo '<br>'. is_bool('true'); //não mostra no browser

    // fazer as regras de conversões
    echo '<p>Regras:</p>';
    echo '<br>'. var_dump((bool) 0); // apenas 0 é false, dos números
    echo '<br>'. var_dump((bool) 20);
    echo '<br>'. var_dump((bool) -1);
    echo '<br>'. var_dump((bool) 0.0); //false
    echo '<br>'. var_dump((bool) 0.000000000001);
    echo '<br>'. var_dump((bool) ""); //false
    echo '<br>'. var_dump((bool) " ");
    echo '<br>'. var_dump((bool) "0"); //false
    echo '<br>'. var_dump((bool) "00");

    echo '<br>'. var_dump(!!"false");
?>

