<div class="titulo">Conversões PHP</div>

<?php
    echo is_int(PHP_INT_MAX). '<br>'; // 1 É TRUE 0 É FALSE
    echo var_dump(PHP_INT_MAX + 1). '<br>';
    echo var_dump(1 + 1.0). '<br>';
    echo var_dump((float) 3);
    
    //float para int
    echo '<p>Float para Int</p>';
    echo var_dump((int) 6.8). '<br>';
    echo var_dump(intval(2.8)). '<br>';
    echo var_dump((int) round(2.8)). '<br>'; //arrendonda para um valor inteiro

    //operações com String
    echo '<p>Strings</p>';
    echo var_dump((3 + "2")). '<br>';
    echo var_dump("3" + 2). '<br>';
    echo var_dump("3" . 2). '<br>';
    echo is_string("3" . 2). '<br>';
    //echo is_string("3" + 2). '<br>';
    echo var_dump(1 + "cinco"). '<br>';
    echo var_dump(1 + "5 cinco"). '<br>';
    echo var_dump(1 + "cinco 5"). '<br>';
    echo var_dump(1 + "2+5"). '<br>'; //soma somente o 1 com o 2
    echo var_dump(1 + "3.2"). '<br>';
    echo var_dump(1 + '-3.2e2'). '<br>';
    echo var_dump((int) "10.5"). '<br>';
    echo var_dump((float) "10.5"). '<br>';
?>

