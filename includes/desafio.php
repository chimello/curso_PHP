<div class="titulo">Desafio do Módulo</div>

<?php

    require_once('desafio_usuario.php');

    $usuario = new Usuario('João Chimello', 25, 'chimello');
    $usuario->apresentar();
    unset($usuario);

?>