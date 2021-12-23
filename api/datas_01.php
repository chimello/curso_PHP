<div class="titulo">Datas #01 PHP</div>

<?php

    echo time() . '<br>';
    echo date('D, d \d\e m \d\e Y H:i A') . '<br>';
    
    echo strftime('%A, %d de %B de %Y', time()) . '<br>';
    
    echo '<hr>';

    setlocale(LC_TIME, 'pt-BR', 'pt_BR.utf-8');
    echo strftime('%A, %d de %B de %Y', time()) . '<br>';

    $amanha = time() + (60 * 60 * 24);
    echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';
    
    $proximaSemana = strtotime('+1 week');
    echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';
    
    $dataFixa = mktime(16, 30, 1, 12, 23, 2021);
    echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';

?>