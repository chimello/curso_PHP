<div class="titulo">Error Handler PHP</div>

<?php
    ini_set('display_erros', 1);
    // echo 4/0 . '<br>';
    
    // error_reporting(E_ALL);
    // echo 4/0 . '<br>';
    
    // error_reporting(~E_ALL);
    // echo 4/0 . '<br>';
    
    // echo '<hr>';
    
    error_reporting(E_ALL);
    // echo 4/0 . '<br>';
    // include 'arquivo_inexistente.php';
    
    function filtrarMensagem($errno, $errstring) {
        // $text = 'include';
        $text = 'by zero';
        return !!stripos(" $errstring", $text);
    }
    
    set_error_handler('filtrarMensagem', E_WARNING);
    
    echo '<hr>';
    //echo 4/0 . '<br>';
    include 'arquivo_inexistente.php';
    
    echo '<hr>';
    
    restore_error_handler();
    include 'arquivo_inexistente.php';
    echo 4/0 . '<br>';


?>